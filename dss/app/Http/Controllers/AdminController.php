<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAdmin(){
        return view('admin');
    }
    public function getProblem(){
        return view('problem');
    }
    public function getData(){
        return view('data');
    }
    public function getModel(){
        return view('model');
    }
}
