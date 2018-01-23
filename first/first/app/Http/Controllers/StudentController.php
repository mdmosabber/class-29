<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
//    public function index(){
//        return view('home');
//    }
    public function add(){
        return "HEllo ABout";
    }

    public function index()
    {
        $name = "Hello Compact";
        $age = '70';

//        return view("home", compact('name','age'));

//        return view('home')
//            ->with('a',$name)
//            ->with('b',$age);

        return view('home',[
            'name' => $name ,
            'age' => $age
        ]);


    }
}
