<?php

namespace App\Http\Controllers;

use Asciisd\Zoho\Facades\ZohoManager;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        return view('home',[

        ]);
    }
}
