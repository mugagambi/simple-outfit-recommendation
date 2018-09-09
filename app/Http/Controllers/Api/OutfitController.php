<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\OutfitRequest;
use App\Http\Resources\OutfitCollection;
use App\Http\Resources\OutfitResource;
use App\Outfit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * @resource Outfits
 * Outfits Api Resource
 */
class OutfitController extends Controller
{
    /**
     * returns a list of all outfits by the logged in user.
     *
     * @return OutfitCollection
     */
    public function index()
    {
        return new OutfitCollection(Outfit::where('user_id', Auth::User()->id)->paginate(20));
    }

    /**
     * Add new outfit by the logged in user
     *
     * @param OutfitRequest $request
     * @return OutfitResource
     */
    public function store(OutfitRequest $request)
    {
        $outfit = Outfit::create([
            'name' => $request->input('name'),
            'photo_url' => $request->input('photo_url'),
            'outfit_category_id' => $request->input('outfit_category_id'),
            'user_id' => Auth::user()->id
        ]);
        return new OutfitResource($outfit);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Outfit $outfit
     * @return OutfitResource
     */
    public function show(Outfit $outfit)
    {
        return new OutfitResource($outfit);
    }

    /**
     * Update an outfit by the user.
     *
     * @param OutfitRequest $request
     * @param  \App\Outfit $outfit
     * @return OutfitResource
     */
    public function update(OutfitRequest $request, Outfit $outfit)
    {
        logger($request);
        $outfit->name = $request->input('name');
        $outfit->photo_url = $request->input('photo_url');
        $outfit->outfit_category_id = $request->input('outfit_category_id');
        $outfit->save();
        return new OutfitResource($outfit);
    }

    /**
     * Remove a user outfit.
     *
     * @param  \App\Outfit $outfit
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Outfit $outfit)
    {
        $outfit->delete();
        return response()->json(['message' => 'removed successfully']);
    }
}
