<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
       // $view = View::make('welcome.blade');
       // $view -> nest('welcome');
       return view('welcomepage');
        //return $view;
    }
    public function home()
    {
        return view('home');
        
    }
}
