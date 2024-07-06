<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms =  DB::table('categories')        
        ->get();
        // return $services;
        return view('frontend.pages.accomodation.index', ['rooms' => $rooms]);
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
    public function show(Request $request,$id)
    {
        $data=DB::table('categories')->where('category_name',$id)->first() ;
        $get_room=DB::table('rooms')->where('room_type',$data->id)->pluck('slug') ; 
        $images=DB::table('room_images')->where('room_id',$get_room)->get();
        $room_details=$get_room=DB::table('rooms')->where('room_type',$data->id)->first();
        $facilities_feat=DB::table('rooms')->where('room_type',$data->id)->pluck('room_facilities');
        $featured_rooms =  DB::table('categories')->where('id','!=',$data->id)->get();
        $skips = ["[","]","\""];
        $facilities=str_replace($skips, ' ',$facilities_feat);
        return view('frontend.pages.accomodation.room-details',compact('data','images','room_details','facilities','featured_rooms') );
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
        //
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
