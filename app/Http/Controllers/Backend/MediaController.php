<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Media;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = DB::table('site_images')->latest()->paginate('6');
      //   $item = new Media;
      //   $table=$item->getTable();
        $trashedImages=Media::onlyTrashed()->latest()->paginate(5);
        //$categories= Category::latest()->paginate('6');
        // return $services;
        return view('admin.gallery.media',compact('images','trashedImages'));
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
        $img = $request->file('image');
        $image_location='backend/assets/images/site_content/';
         $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
          Image::make($img)->resize(1280,720)->save($image_location.$make_name);
          $uploadPath = $image_location.$make_name;
    
         $dataimage= array();
         $dataimage['image_name']=$uploadPath;
        
         if (empty($request->mainpage)) {
            $dataimage['main_page']='No';
         }else{
            $dataimage['main_page']=$request->mainpage;
         }
         $dataimage['image_type']=$request->image_type;
        $dataimage['image_description']=$request->description;
         $dataimage['created_at']=Carbon::now();
              DB::table('site_images')->insert($dataimage);

    
        
        return  redirect()->back()->with('success','Images Uploaded Successfully');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeMultiple(Request $request)
    {
        $images = $request->file('multi_img');
        foreach ($images as $img) {
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
          Image::make($img)->resize(1920,1272)->save('backend/assets/images/site_content/'.$make_name);
          $uploadPath = 'backend/assets/images/site_content/'.$make_name;
    
         $dataimage= array();
         $dataimage['image_name']=$uploadPath;
      
         if (empty($request->mainpage)) {
            $dataimage['main_page']='No';
         }else{
            $dataimage['main_page']=$request->mainpage;
         }
       
        $dataimage['image_description']=$request->description;
        $dataimage['image_type']=$request->image_type;
         $dataimage['created_at']=Carbon::now();
              DB::table('site_images')->insert($dataimage);

    
        }
        return  redirect()->back()->with('success','Images Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photos = DB::table('site_images')->where('id',$id)->first();
        return view('admin.gallery.edit', compact('photos'));
        
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
        $old_image=$request->old_image;
        $dataimage= array();
      
         if (empty($request->mainpage)) {
            $dataimage['main_page']='No';
         }else{
            $dataimage['main_page']=$request->mainpage;
         }
         $dataimage['image_type']=$request->image_type;
        $dataimage['image_description']=$request->description;
         $dataimage['updated_at']=Carbon::now();

         $img = $request->file('image');
         if ($img) {
            @unlink($old_image);
            $image_location='backend/assets/images/site_content/';
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
             Image::make($img)->resize(1920,1272)->save($image_location.$make_name);
             $uploadPath = $image_location.$make_name;
             $dataimage['image_name']=$uploadPath;
             
             DB::table('site_images')->where('id',$id)->update($dataimage);
             return Redirect()->route('media.all')->with('success','successfully updated the site image');
         }else{
            DB::table('site_images')->where('id',$id)->update($dataimage);
            return Redirect()->route('media.all')->with('success','successfully updated without the site image');
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
        $site_image = DB::table('site_images')->where('id',$id)->first();
        $image=$site_image->image_name;
        unlink($image);
        DB::table('site_images')->where('id',$id)->delete();

        redirect()->back()->with('success', 'site image removed successfully');
    }
         /**
     * soft delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete($id)
    {
        Media::find($id)->delete();
        return  redirect()->back()->with('success','Category soft deleted Successfull');
    }
       /**
     * soft delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        Media::withTrashed()->find($id)->restore();
        return  redirect()->route('media.all')->with('success','Site Image Restored Successfull');
    }
      /**
     * Complete delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Media::onlyTrashed()->find($id)->forceDelete();
        return  redirect()->route('media.all')->with('success','Site Image Removed Successfull');
    }
}
