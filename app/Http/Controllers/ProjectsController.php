<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Pagination\LengthAwarePaginator;

use App\Project;

use App\User;

use Session;

use App\Events\ProjectCreated;


//use App\Mail\ProjectCreated;

//use Illuminate\Support\Facade\Mail;

class ProjectsController extends Controller
{

        public function __construct(){

            $this->middleware('auth');
        }

    
    public function index()
    {

         //  $projects = auth()->user()->projects; 
        //$projects = Project::where('owner_id', auth()->id())->get(); 

        //return $projects;
       // $projects = Project::orderBy('id','desc');

       return view ('projects.index', [
           'projects' => auth()->user()->projects()->paginate(3)
       ]);
    }
 
    
    public function create()
    {
        return view ('projects.create');
    }

   
    public function store()
    {
        $attributes= $this->validateProject();

        $attributes['owner_id']= auth()->id();
    
        $project  = Project::create($attributes);//+ ['owner_id'=> auth()->id()]

        Session::flash('success','This blog post was succesfully saved!!');
        
        // event(new ProjectCreated($project));

        return redirect('/projects');
    }

    
    public function show(Project $project)
    {
     
         $this->authorize('update', $project);

        return view('projects.show', compact('project'));
    } 

  
    public function edit(Project $project)
    {
       
        return view('projects.edit', compact('project'));
    }

    
    public function update(Project $project)
    {
       
      Project::update($this->validateProject( ));


       return redirect('/projects');
    }

   
    public function destroy(Project $project)
    {
 
        $project->delete();

        return redirect('/projects');
    }

    protected function validateProject(){
        return request()->validate([
            'title'=> ['required','min:3', 'max:100'],
            'description'=> ['required', 'min:10', 'max:255']
        ]); 
    }
}
