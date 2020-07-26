<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Create function called

    public function index()
    {
    //    return 'Hello World';

       return view('home');
    }




}
