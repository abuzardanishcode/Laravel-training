<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    function SignupForm(Request $req){
         //return $req;
         $req->validate([
             "username" => 'required | min:3 | max:10 | alpha',
             "email"    => 'required | email',
             "city"     => 'required | uppercase',
             "skill"    => 'required'
          ],
          [
            'username.required' => "username can't be empty",
            'username.min' => "Please insert atleast 3 character",
            'username.alpha' => "Text to daal bhai name me"
          ]
        );

          return $req;
         //return("you have successfully signup via controller");
    }
}
