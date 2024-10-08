<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MemberController extends Controller
{
    public function showDashboard()
    {
        return view('member.index');
    }
}
