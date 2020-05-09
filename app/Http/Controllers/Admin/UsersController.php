<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Event;

class UsersController extends Controller
{
    /**
     * Display admin dashboard
     * 
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $count = Event::all()->count();
        return view('users.index')->with('count', $count);
    }
}
