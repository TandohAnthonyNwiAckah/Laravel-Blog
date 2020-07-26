<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\User;

class UserController extends Controller
{
    //Create function called

    public function index()
    {


     
        //ELOQUENT ORM CRUD

        //INSERT
        // $user = new User();
        // // dd($user);

        // $user -> name = "Tandoh" ;
        // $user -> email = "tandoh@tanacom.io";

        // //use bcrypt to encrypt Password.
        // $user ->  password = bcrypt('password');
        // $user ->  save();




        //UPDATE

        User::where('id',4)-> update(['name' => 'Tanacom']);


        // //SELECT
        $user  = User::all();
        return $user ;
       
        
        //DELETE
        // User::where('id',2)-> delete();





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
