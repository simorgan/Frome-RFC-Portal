<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    Public function index(){
        $title = 'Dashboard';

        return view('pages.dashboard')->with('title', $title);
    }



    Public function kitcollection(){

        $title = "Senior's Kit Collection";

        return view('pages.kitCollection', compact('title'));

    }
}
