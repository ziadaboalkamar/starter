<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public  function  showString(){
        return 'Hallo';
    }

    public function  index(){

        $data = ["ziad","claudia"];
        return view('welcome',compact('data'));
    }
}
