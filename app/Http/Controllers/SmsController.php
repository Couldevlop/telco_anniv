<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function showSms()
    {
    	return view('sms');
    }
}
