<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Member;
use Auth;

class KitAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//"Allocated kit list" 
    {
    
        $members = Member::orderBy('name')->simplePaginate(10);
        $title = "Kit Collection App";


        return view('pages.AllocatedKitList', compact('title', 'members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $memberAdd = new member;

        $memberAdd->name = $request->input('name');
        $memberAdd->email = $request->input('email');
        $memberAdd->topSize = $request->input('topSize');
        $memberAdd->shortSize = $request->input('shortSize');
        $memberAdd->save();
        


        $title = 'Kit Collection App';

        return view('pages.kitCollectionMemberAdded', compact('title', 'memberAdd'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
       

    }

    /**
     * Display the individual member
     * with the kit status.
     * 
     */
    public function kitCollectionShowMember(){

        $id = request('id');
        $member = Member::find($id);
        $title = "Kit Collection App";

        return view('pages.kitCollectionShowMember' , compact('title', 'member') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage when the kit have been collected.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $querry = Member::find($id);

        if ($request['checkBoxTop'] == true) {
            $topCollection = $querry;
            $topCollection->top = '1';
            $topCollection->topCollectDate = date("Y-m-d");
            $topCollection->topSize = $request['topSize'];
            $topCollection->topIssuedBy = Auth::user()->name;
            $topCollection->save();     
        }
        if ($request['checkBoxShorts'] == true){
            $shortsCollection = $querry;
            $shortsCollection->shorts = '1';
            $shortsCollection->shortCollectDate = date("Y-m-d");
            $shortsCollection->shortSize = $request['shortSize'];
            $shortsCollection->shortsIssuedBy = Auth::user()->name;
            $shortsCollection->save();   
        }
        if ($request['checkBoxSocks'] == true){
            $socksCollection = $querry;
            $socksCollection->socks = '1';
            $socksCollection->sockCollectDate = date("Y-m-d");
            $socksCollection->socksIssuedBy = Auth::user()->name;
            $socksCollection->save();
        }
    
        $title = 'Kit Collection App';
    return view('pages.collectionSubmited', compact('title'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
