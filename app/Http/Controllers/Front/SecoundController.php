<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecoundController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('showString2');
    }

    public  function  showString(){
        return 'Hallo0';
    }
    public  function  showString1(){
        return 'Hallo1';
    }
    public  function  showString2(){
        return 'Hallo2';
    }
    public  function  showString3(){
        return 'Hallo3';
    }
}
