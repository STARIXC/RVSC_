<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frooms = DB::table('categories')        
        ->get();
        $services = DB::table('services')->get();
        $photos = DB::table('site_images')
        ->where('main_page','=','Yes')
        ->get();
     
        // return $services;
        return view('frontend.index',['photos' => $photos,'services' => $services,'frooms' => $frooms]);
    }

}
