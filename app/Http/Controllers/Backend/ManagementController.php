<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = DB::table('directors')->where('category','=','BOD')->where('deleted_at', NULL)->orderBy('order_app', 'asc')->get();
        $trustees = DB::table('directors')->where('category','=','BOT')->where('deleted_at', NULL)->orderBy('order_app', 'asc')->get();
        // return $services;
        return view('frontend.pages.management.index', ['directors' => $directors,'trustees'=>$trustees]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allDirectors()
    {
        $directors = Director::latest()->paginate('6');
        $trashed=Director::onlyTrashed()->latest()->paginate(5);
        // return $services;
        return view('admin.management.index', compact('directors','trashed'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $directors = DB::table('directors')->where('deleted_at', NULL)->orderBy('order_app', 'asc')->get();
        return view('frontend.pages.management.all', ['directors' => $directors]);
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
               
        $request->validate([
            'dtitle' => 'required|max:255',
            'dpos' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
           
        ],
        [
            'dtitle.required'=>'Please Input Service Name',
            'dpos.required'=>'Please Input Service Description',
            'image.required'=>'Please choose an Image for this Service',
        ]
    );

    $rimage=$request->file('image');
    $make_name = hexdec(uniqid()).'.'.$rimage->getClientOriginalExtension();
      Image::make($rimage)->save('backend/assets/images/management/'.$make_name);
      $last_image = 'backend/assets/images/management/'.$make_name;
      Director::insert([
        'director_name'=>$request->dtitle,
        'director_position'=>$request->dpos,
        'category'=>$request->man_cat,
        'director_image'=>$last_image,
      ]);
    //   $notification=array(
    //     'message'=>'Service Inserted Successfully',
    //     'alert_type'=>'info',
    // );
    return redirect()->route('management.all')->with('success','Added Successfull');
   
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
        $director=  DB::table('directors')->where('id',$id)->first();
        return view('admin.management.edit', compact('director'));
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
        $data= array();
        $data['director_name']=$request->dtitle;
        $data['director_position']=$request->dpos;
        
        $rimage=$request->file('image');
        if ($rimage) {
            @unlink($old_image);
            $make_name = hexdec(uniqid()).'.'.$rimage->getClientOriginalExtension();
            Image::make($rimage)->save('backend/assets/images/management/'.$make_name);
            $last_image = 'backend/assets/images/management/'.$make_name;
            $data['director_image']=$last_image;
            DB::table('directors')->where('id',$id)->update($data);
            return redirect()->route('management.all')->with('success','Update Successfull');
        }else {
            DB::table('directors')->where('id',$id)->update($data);
            return redirect()->route('management.all')->with('success','Update Successfull without image');
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
        $site_image = DB::table('directors')->where('id',$id)->first();
        $image=$site_image->director_image;
        $remove_image=unlink($image);
        if ($remove_image) {
            DB::table('directors')->where('id',$id)->delete();
        }else{
            redirect()->route('management.all')->with('eror','Failled to remove !!!');
        }
       
       return  redirect()->route('management.all')->with('success','Added Successfull');
    }
         /**
     * soft delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete($id)
    {
        Director::find($id)->delete();
        return  redirect()->back()->with('success','Deleted Successfull');
    }
       /**
     * soft delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        Director::withTrashed()->find($id)->restore();
        return  redirect()->route('management.all')->with('success','Restored Successfull');
    }
      /**
     * Complete delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Director::onlyTrashed()->find($id)->forceDelete();
        return  redirect()->route('management.all')->with('success','Removed Successfull');
    }

    public function board()
    {
        $directors = DB::table('directors')->where('category','=','BOD')->where('deleted_at', NULL)->orderBy('order_app', 'asc')->get();
        return view('frontend.pages.management.board', ['directors' => $directors]);
    }
    public function trustee()
    {
        $directors = DB::table('directors')->where('category','=','BOT')->where('deleted_at', NULL)->orderBy('order_app', 'asc')->get();
        return view('frontend.pages.management.trustee', ['directors' => $directors]);
    }
}
