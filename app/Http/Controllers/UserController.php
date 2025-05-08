<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Causes;
use App\Models\Galleries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

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
        $events = Events::inRandomOrder()->paginate(4);
        $event = Events::all();
        $causes = Causes::inRandomOrder()->paginate(3);
        $cause = Causes::all();
        $gallery = Galleries::inRandomOrder()->paginate(7);

        if ($usertype == '1') {
            return view('dashboard.dashboardIndex.admin', compact('event', 'cause'));
        } else {
            return view('wPage.home.home', compact('events', 'causes', 'gallery'));
        }
    }

}