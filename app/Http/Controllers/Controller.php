<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    function header(){
        return view('commman.header');
    }
}
