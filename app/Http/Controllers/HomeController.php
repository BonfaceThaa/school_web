<?php

namespace App\Http\Controllers;

use App\Event;

use Illuminate\Http\Request;

class HomeController extends Controller
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
