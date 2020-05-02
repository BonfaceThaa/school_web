<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class BaseController extends Controller
{
    // Home page
    function index() {
        return view('home.index');
    }

    // About Us page
    function about() {
        return view('home.about');
    }

    // Contact Us page
    function contacts() {
        return view('home.contact');
    }

    // Events & announcements page
    function events() {
        $events = Event::all();
        return view('home.events')->with('events', $events);
    }
}
