<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    Public function index(){
        $title = 'Dashboard';

        return view('pages.dashboard')->with('title', $title);
    }


    Public function kitout(){


        $members = \App\Models\Member::orderBy('name')->simplePaginate(10);

        //$members = \App\Models\Member::all()->paginate(2);

        $title = "Senior's Allocated Kit";

        return view('pages.AllocatedKit', compact('members', 'title'));

    }
}
