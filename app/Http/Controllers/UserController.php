<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//checking view
use Illuminate\Support\Facades\View;


class UserController extends Controller
{
    //creating controller
    function getUser(){
        return ("<h1>This is user</h1>");
    }

    // calling values in controller
    /* function getUserName($name){ 
        return ("<h1>The user name is : " . $name . "</h1>");
    } */

    function getUserName($name){
        return view( 'getUsername', ['name'=> $name] );
    }

    function getView(){
        return view('dashboard');
    }

    function login(){
        if(view::exists('admin.login')){
            return view('admin.login');
        }else{
            return("View not foudn");
        }
    }   
}
