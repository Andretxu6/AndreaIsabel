<?php

namespace App\Http\Controllers;

use App\Http\Middleware\checkUser;
use App\UsuPermitidos;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function __construct(Request $request){
        $this->middleware('checkUser'); //no pasa el request
    }

    public function formRedirect(Request $request){

    }
}
