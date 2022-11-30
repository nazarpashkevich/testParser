<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(): View
    {
        $this->setTitle(trans('main.home_title'));

        $events = Event::query()->currentUserEvents()->get();
        return view('home.index', compact('events'));
    }
}
