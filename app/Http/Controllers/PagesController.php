<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * index page(will load the dashboard)
     */
    Public function index(){
        $title = 'Dashboard';

        return view('pages.dashboard')->with('title', $title);
    }


    /**
     *          | Kit Collection App |
     *                             
     * Pages:
     *  *kitMemberSearch = page to search for the member with the ID.
     * 
     * *kitCollectionAddMember = page to add a paid member to the database.
     */
    Public function kitMemberSearch(){

        $title = "Kit Collection App";

        return view('pages.kitCollection', compact('title'));
    }

    Public function kitCollectionAddMember(){

        $title = "Kit Collection App";

        return view('pages.kitCollectionAddMember', compact('title'));
    }
}
