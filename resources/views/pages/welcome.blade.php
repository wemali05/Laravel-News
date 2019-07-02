@extends('layout')

@section('title', '| Welcome Page')

@section('content')
<h1>Welcome to laravel</h1>

<ul>
      <li><a href="/">Home</a></li> 
      <li><a href="/pages/about">About Us</a></li>
      <li><a href="/pages/contact">Contact Us</a></li>
  </ul>

@foreach($tasks as $task)
<p>{{$task}}</p>

@endforeach

@endsection