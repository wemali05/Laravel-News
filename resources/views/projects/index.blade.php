@extends('layout')

@section('title', '| ')

@section('content')
     <ul>
     <h1>Projects</h1> 
         
           @foreach($projects as $project)
               <li>
                    <a href="/projects/{{$project->id}}">
                    
                    {{$project->title}}
                    </a>
               </li>
         
     @endforeach
     </ul>
    
           <div class="text-center">
                {{$projects->links()}}
            </div>
@endsection