<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Causes;
use App\Models\Galleries;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Events::inRandomOrder()->paginate(4);
        $causes = Causes::inRandomOrder()->paginate(3);
        $gallery = Galleries::inRandomOrder()->paginate(7);
        return view('wPage.home.home', compact('events', 'causes', 'gallery'));
    }

    public function aboutus(){
        return view('wPage.about.about');
    }
}
