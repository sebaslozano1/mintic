<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $this->middleware('auth');
        return view('form');
    }


    public function view()
    {
         $this->middleware('auth');
        return view('formView');
    }


    public function viewResult()
    {
        return view('result');
    }

}
