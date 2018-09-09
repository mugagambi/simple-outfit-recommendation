<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;
use Illuminate\Support\Facades\DB;

class BroadCastSmsController extends Controller
{
    public function show_form()
    {
        return view('sms.broadcast');
    }

    public function send_sms(Request $request)
    {
        $request->validate([
            'message' => 'required'
        ]);
        $users = DB::table('users')->select('phone_number')->get();
        $phone_numbers = [];
        foreach ($users as $user) {
            if ($user->phone_number) {
                array_push($phone_numbers, $user->phone_number);
            }
        }
        $message = $request->input('message');
        $username = 'fashionJNHBH'; // use 'sandbox' for development in the test environment
        $apiKey = '67b096b26c22d03aeeee798504c7fc96f7fb987d92e1cdc58f45072d81743d2b'; // use your sandbox app API key for development in the test environment
        $AT = new AfricasTalking($username, $apiKey);
        $SMS = $AT->sms();
        $SMS->send(['message' => $message, 'to' => $phone_numbers, 'enqueue' => true]);
        flash('sms sent successfully.Chech your Africa\'s  Talking dashboard for delivery receipts')->success();
        return redirect()->route('show_broadcast_form');
    }
}
