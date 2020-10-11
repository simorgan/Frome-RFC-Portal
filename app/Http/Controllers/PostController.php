<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    Public function kitAllocated(){
        $members = \App\Models\Member::orderBy('name')->simplePaginate(10);
        $title = "Senior's Allocated Kit";

        return view('pages.AllocatedKit', compact('members', 'title'));
    }

    Public function kitOut(){
       

        $id = request('id');
        $member = \App\Models\Member::find($id);
        $title = "Senior's Kit Collection";

        return view('pages.kitCollectionShow', compact('title', 'member'));
    }

    Public function kitOutCollection(){
        $id = request('id');
     
        if (request('checkBoxTop') == true) {
            $top = 'Top checked |';
        }
        else {
            $top = 'Top Not checked |';
        }
        if (request('checkBoxShorts') == true) {
            $shorts = 'Shorts checked |';
        }
        else {
            $shorts = 'Shorts Not checked |';
        }
        if (request('checkBoxSocks') == true) {
            $socks = 'Socks checked |';
        }
        else {
            $socks = 'Socks Not checked |';
        }
        
        $title = "Senior's Kit Collection";

        return view('pages.kitCollected', compact('title', 'top','shorts','socks', 'id'));
    }

}
