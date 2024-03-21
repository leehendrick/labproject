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
            $usertype = Auth()->user()->type;
            if ($usertype == 'admin'){
                return Inertia::render('Home');
            }
            else if($usertype == 'gerente'){
                return Inertia::render('Dashboard');
            }
            else{
                redirect()->back();
            }
        }
    }
}
