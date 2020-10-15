<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    Public function index(){
        $title = 'Dashboard';

        return view('pages.dashboard')->with('title', $title);
    }


    /**
     * Kit Collection App
     * 
     * Pages:
     *  -collectionId = page to search for the member with the ID
     */
    Public function kitMemberSearch(){

        $title = "Senior's Kit Collection";

        return view('pages.kitCollection', compact('title'));
    }
}
