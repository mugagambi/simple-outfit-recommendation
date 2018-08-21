<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\LogoutRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Validator, DB, Hash, Mail, Illuminate\Support\Facades\Password;

/**
 * @resource Authentication
 * Authentication Api Resource
 */
class UserController extends Controller
{
    public $successStatus = 200;

    /**
     * login api.This will return a token that will be added as query param to subsequent api calls
     * e.g http://oufit.herokuapp.com/api/weather-groups?token={returned_token}
     * to fetch weather groups
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }

    /**
     * Register api.This registers a new user to the app and returns a token that the user can use to access the resources.
     * e.g http://oufit.herokuapp.com/api/weather-groups?token={returned token}
     * to fetch weather groups
     * @param RegisterRequest $request
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        User::create(['name' => $name, 'email' => $email, 'password' => Hash::make($password)]);
        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }

    /**
     * Log out
     * Invalidate the token, so user cannot use it anymore
     * They have to relogin to get a new token
     *
     * @param LogoutRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(LogoutRequest $request)
    {
        try {
            JWTAuth::invalidate($request->input('token'));
            return response()->json(['success' => true, 'message' => "You have successfully logged out."]);
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['success' => false, 'error' => 'Failed to logout, please try again.'], 500);
        }
    }

}
