<?php
namespace App\Http\Controllers;
use App\Todo;
use App\Http\Requests\TodoCreateRequest;
// use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{

     public function __construct()
     {
         $this->middleware('auth')->except('index');
     }

    //
    public function index()
    {

    //    $todos = Todo::all();

        $todos = Todo::orderby('completed')->get();


    //    return $todos;

        // return view('todos.index')->with(['todos'=>$todos]);


        return view('todos.index',compact('todos'));
        
    }

   public function create()
   {
      return view('todos.create');
   }

    // public function edit($id)
    public function edit(Todo $todo)
    {


        // dd($todo->title);

        // $todo = Todo::find($id);

        // return $todo;

        return view('todos.edit',compact('todo'));
    }

    public function update(TodoCreateRequest $req,Todo $todo)
    {   
    $todo->update(['title'=>$req->title]);

     return redirect(route('todos.index'))->with('message','Updated successfully');

    }

   public function complete(Todo $todo)
    {
       # code...

       $todo->update(['completed' => true]);

        return redirect(route('todos.index'))->with('message', 'Task Completed');

    }

    public function incomplete(Todo $todo)
    {
        # code...

        $todo->update(['completed' => false]);

        return redirect(route('todos.index'))->with('message', 'Task Incomplete');
    }

    public function destroy(Todo $todo)
    {
      
        $todo->delete();

        return redirect(route('todos.index'))->with('message', 'Task Deleted');
    }

    public function store(TodoCreateRequest $request)
    {



        //    dd($request->all());

        // $rules = [

        //         'title' => 'required|max:255',
        // ];

        // $message =[
        //     'title.max' => 'Todo tilte should not be greater than 255 character',
        // ];

        // $validator = Validator::make($request->all(),$rules,$message);


        // if($validator->fails()){

        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // $request->validate([
        //     'title'=>'required|max:255',
        //     ]
        // );

        Todo::create($request->all());

        return redirect()->back()->with('message', 'Todo created sucessfully');
    }


}
