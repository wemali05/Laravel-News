@extends('layout')

@section('title', '| ')

@section('content')
     
     <h1 class="title">Create Projects</h1> 

     <form method="POST" action="/projects" >
        {{csrf_field()}}
        <div class="field">
          <label for="title" class="label">Project Title</label>

          <div class="control" >
               <input type="text" name="title" class="input {{$errors->has('title')? 'is-danger':''}}"  value="{{old('title')}}" required>
          </div>
        </div>

         <div class="field">
           <label for="description" class="label">Project Description</label>

               <div class="control">
                    <textarea name="description" class="textarea {{$errors->has('description')? 'is-danger':''}}" required>{{old('description')}}</textarea>
                </div>
         </div>

         <div>
          <button type="submit" class="button is-link">Create Project</button>
         </div>

     @include('error')

     </form>

    

@endsection