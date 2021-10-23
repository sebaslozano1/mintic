<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { 
    }

    public function viewUser()
    {
        return view('formViewUser');
    }

}
