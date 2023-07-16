<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Causes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function redirect()
    {

        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            $events = Events::all();
            $causes = Causes::all();
            return view('dashboard.dashboardIndex.admin', compact('events', 'causes'));
        } else {
            return view('wPage.home.home');
        }
    }

}