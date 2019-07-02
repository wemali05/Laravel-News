@extends('layout')

@section('title','| Edit Project')

@section('content')

<h1 class="title">Edit  Project</h1>

<form method="POST" action="/projects/{{$project->id}}" style="margin-bottom:1em">
        @method('PATCH')
        @csrf

            <div class="field">
                <label class="label" for="title">Title</label>
                
                    <div class="control">
                            <input type="text" class="input" name="title"  value="{{$project->title}}">
                    </div>
            
            </div>

            <div class="field">
                <label class="label" for="description">Description</label>
                
                <div class="control">
                    <textarea name="description" class="textarea">{{$project->description}}</textarea>
                </div>
                
            </div>



    <form action="">
      <div class="field">
          <div class="control">
          <button type="submit" class="button is-link">Update project</button>
          </div>
      </div>
      </form> 

   

    <form method="POST" action="/projects/{{$project->id}}">
  @method('DELETE')
    @csrf
        <div class="field">
            <div class="control">
            <button type="submit" class="button">Delete Project</button>
            </div>
        </div>
      </form> 


      </form>


@endsection