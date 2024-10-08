<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LandingController extends Controller
{
    public function showLanding()
    {
        return view('welcome');
    }

    public function purchaseDetail()
    {
        return view('member.purchase-detail');
    }
}

