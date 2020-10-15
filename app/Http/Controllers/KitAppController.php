<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Member;

class KitAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $members = Member::orderBy('name')->simplePaginate(10);
        $title = "Senior's Kit Collection";


        return view('pages.AllocatedKitList', compact('title', 'members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $title = "Senior's Kit Collection show";

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $idNumber = $request;
        return view('pages.collectionSubmited', compact('idNumber'));
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
