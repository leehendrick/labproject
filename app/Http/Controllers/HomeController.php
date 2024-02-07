<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->user_type;
            if ($usertype == 'user'){
                return Inertia::render('Dashboard');
            }
            else if($usertype == 'admin'){
                return Inertia::render('Dashboard');
            }
            else{
                redirect()->back();
            }
        }
    }
}
