<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

        $tasks = [

            'Go to laundry',
            'Code laravel',
            'Practice makes perfect'

        ];
        return view('pages.welcome')->withTasks($tasks);
    }


    public function about(){
        return view('pages.about');
    }


    public function contact(){
        return view('pages.contact');
    }
}
