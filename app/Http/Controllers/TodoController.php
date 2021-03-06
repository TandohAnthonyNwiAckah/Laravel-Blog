<?php
namespace App\Http\Controllers;
use App\Todo;
use App\Step;
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


        $todos = auth()->user()->todos->sortBy('completed');


        // return $todos;


        return view('todos.index',compact('todos'));


        
    }

public function show(Todo $todo)
{

    return view('todos.show',compact('todo'));

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

        if ($req->stepName) {
            foreach ($req->stepName as $key => $value) {
                $id = $req->stepId[$key];
                if (!$id) {
                    $todo->steps()->create(['name' => $value]);
                } else {
                    $step = Step::find($id);
                    $step->update(['name' => $value]);
                }
            }
        }


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


        $todo->steps->each->delete();
        $todo->delete();


        
        // return redirect()->back()->with('message', 'Task Deleted!');
      
        // $todo->delete();

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


        // dd(auth()->user()->todos);

        // auth()->user()->todos()->create($request->all());

        // Todo::create($request->all());

        $todo = auth()->user()->todos()->create($request->all());

        if ($request->step) {
            foreach ($request->step as $step) {
                $todo->steps()->create(['name' => $step]);
            }
        }

        return redirect(route('todos.index'))->with('message', 'Todo created sucessfully');
    }


}
