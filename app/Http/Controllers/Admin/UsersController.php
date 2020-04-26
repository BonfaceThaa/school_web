<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display admin dashboard
     * 
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('users.index');
    }
}
