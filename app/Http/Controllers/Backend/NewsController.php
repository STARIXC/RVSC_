<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Image;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = DB::table('new_updates')
        ->whereDate('expiry_date',  '>=', DATE(NOW()))
        ->get();
        return view('frontend.pages.news.index', ['events' => $events]);
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        $events = DB::table('new_updates')
        ->whereDate('expiry_date',  '>=', DATE(NOW()))
        ->get();
        return view('frontend.pages.news.index', ['events' => $events]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminNews()
    {
        $events = DB::table('new_updates')
        ->latest()
        ->paginate('6');
       
        return view('admin.news.index', ['events' => $events]);
    }
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
        $data = array();


    $data['title']=$request->news_name;
    $data['description']=$request->newsdes;
    $data['category']=$request->newscat;
    $data['expiry_date']=$request->edate;
    $data['created_at']=Carbon::now();
    $rimage=$request->file('news_image');
    $make_name = hexdec(uniqid()).'.'.$rimage->getClientOriginalExtension();
      Image::make($rimage)->resize(500,850)->save('backend/assets/images/events/'.$make_name);
      $last_image = 'backend/assets/images/events/'.$make_name; 
    $data['image']=$last_image;
    DB::table('new_updates')->insert($data);
    return  redirect()->route('news.all')->with('success','Event Submited successfully');

   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news=  DB::table('new_updates')->where('news_id',$id)->first();
    
        return view('frontend.pages.news.jobs',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = DB::table('new_updates')->where('news_id',$id)->first();
        return view('admin.news.edit', compact('events'));
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
        $old_image=$request->old_img;
        
           $data = array();


    $data['title']=$request->news_name;
    $data['description']=$request->newsdes;
    $data['category']=$request->newscat;
    $data['expiry_date']=$request->edate;
    $data['updated_at']=Carbon::now();
    $img = $request->file('news_image');
         if ($img) {
            unlink($old_image);
            $image_location='backend/assets/images/events/';
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
             Image::make($img)->resize(500,850)->save($image_location.$make_name);
             $uploadPath = $image_location.$make_name;
             $data['image']=$uploadPath;
             
             DB::table('new_updates')->where('news_id',$id)->update($data);
             return Redirect()->route('news.all')->with('success','successfully updated the site image');
         }else{
            DB::table('new_updates')->where('news_id',$id)->update($data);
            return Redirect()->route('news.all')->with('success','successfully updated without the site image');
         }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event_image = DB::table('events')->where('id',$id)->first();
        $image=$event_image->event_image;
        unlink($image);
        DB::table('events')->where('id',$id)->delete();
       return  redirect()->route('events.all')->with('success', 'site image removed successfully');
    }
}
