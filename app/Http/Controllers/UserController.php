<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\User;
use Illuminate\Contracts\Session\Session;

class UserController extends Controller
{
    //Create function called

    public function index()
    {

        //MASS ASSIGNMENT

        $data = [
            'name' => 'TONY',
            'email'=>'tony@tanacom.io',
            'password'=> 'password',
        ];


        User::create($data);


     
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

        // User::where('id',4)-> update(['name' => 'Tanacom']);


        // // //SELECT
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


    public function uploadAvatar(Request $req)
    {

        if($req->hasFile('image')){
        
         User::uploadAvatar($req->image);

         session()->put('message','Image uploaded sucessfully.');

        return redirect()->back(); // sucessful

        }


        session()->put('message', 'Image uploading failed.');

        return redirect()->back(); // failed
    }




}
