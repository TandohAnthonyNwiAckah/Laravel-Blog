<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //Create function called

    public function index()
    {
    //return 'Hello World';

     //Raw SQL QUERIES

     //INSERT USERS
     //  DB::insert('insert into users(name,email,password)
     //  values(?,?,?)',['Tanacom','info@tanacom.io','password',]);

 
    //  // UPDATE USERS

    //  DB::update('update users set name= ? where id = 1',['TONY']);



    //DELETE USERS


    //    DB::delete('delete from users where id = 1');



    //   // SELECT USERS

    //    $users =  DB::select('select * from users');

    //   return $users;


       return view('home');
    }




}
