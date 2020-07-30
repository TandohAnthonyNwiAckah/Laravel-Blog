<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    //
    public function index()
    {


       $todos = Todo::all();


    //    return $todos;

        // return view('todos.index')->with(['todos'=>$todos]);


        return view('todos.index',compact('todos'));
        
    }



public function create()
{
      return view('todos.create');
}


 public function store(Request $request){
    //    dd($request->all());


    $rules = [

            'title' => 'required|max:255',
    ];


    $message =[
        'title.max' => 'Todo tilte should not be greater than 255 character',
    ];

    $validator = Validator::make($request->all(),$rules,$message);


    if($validator->fails()){
        
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // $request->validate([
    //     'title'=>'required|max:255',
    //     ]
    // );

      Todo::create($request->all());

      return redirect()->back()->with('message','Todo created sucessfully');

    }



    
    
    public function edit()
    {
        return view('todos.edit');
    }




}
