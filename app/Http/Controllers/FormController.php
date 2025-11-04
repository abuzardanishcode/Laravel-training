<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    function SignupForm(Request $req){
         //return $req;
         echo "<h1>User name is $req->username </h1>";
         echo "<h1>User email is $req->email </h1>";
         echo "<h1>User city is $req->city </h1>";
         //return("you have successfully signup via controller");
    }
}
