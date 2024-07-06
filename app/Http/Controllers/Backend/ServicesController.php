<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $services = DB::table('services')
        // ->latest()
        // ->paginate(9);
        $services= Service::latest()->paginate('6');
        $trashedServices=Service::onlyTrashed()->latest()->paginate(5);
        return view('admin.activitie.services', compact('services','trashedServices'));
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
            'sname' => 'required|max:255',
            'description' => 'required',
            'simage' => 'required|mimes:png,jpg,jpeg',
           
        ],
        [
            'sname.required'=>'Please Input Service Name',
            'description.required'=>'Please Input Service Description',
            'simage.required'=>'Please choose an Image for this Service',
        ]
    );

    $rimage=$request->file('simage');
    $make_name = hexdec(uniqid()).'.'.$rimage->getClientOriginalExtension();
      Image::make($rimage)->resize(500,333)->save('backend/assets/images/services/'.$make_name);
      $last_image = 'backend/assets/images/services/'.$make_name;
      Service::insert([
        'service_title'=>$request->sname,
        'service_description'=>$request->description,
        'service_image'=>$last_image,
      ]);
    //   $notification=array(
    //     'message'=>'Service Inserted Successfully',
    //     'alert_type'=>'info',
    // );
    redirect()->route('services.all')->with('success','Category Updated Successfull');
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
        $service=  DB::table('services')->where('id',$id)->first();
        return view('admin.activitie.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $service_id=$request->id;
        $old_img=$request->old_image;
        if ($request->file('simage')) {
            @unlink($old_img);
            $rimage=$request->file('simage');
            $make_name = hexdec(uniqid()).'.'.$rimage->getClientOriginalExtension();
              Image::make($rimage)->resize(500,333)->save('backend/assets/images/services/'.$make_name);
              $last_image = 'backend/assets/images/services/'.$make_name;

              Service::findOrFail($service_id)->update([
                'service_title'=>$request->sname,
                'service_description'=>$request->description,
                'service_image'=>$last_image,
              ]);
              $notification=array(
                  'message'=>'Service Updated',
                  'alert_type'=>'info',
              );
           return   redirect()->route('services.all')->with('success','Category Updated Successfull');

        }else{
            Service::findOrFail($service_id)->update([
                'service_title'=>$request->sname,
                'service_description'=>$request->description,
              ]);
              $notification=array(
                  'message'=>'Service Updated',
                  'alert_type'=>'info',
              );
           return   redirect()->route('services.all')->with('success','Category Updated Successfull');

        }

    }
     /**
     * soft delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete($id)
    {
        $delete=Service::find($id)->delete();
        $notification=array(
            'message'=>'Service Moved to Trash',
            'alert_type'=>'info',
        );
        return  redirect()->back()->with($notification);
    }
       /**
     * soft delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $restore_deleted=Service::withTrashed()->find($id)->restore();

        $notification=array(
            'message'=>'Service Restored',
            'alert_type'=>'info',
        );
        return  redirect()->back()->with($notification);
    }
      /**
     * Complete delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $pdelete=Service::onlyTrashed()->find($id)->forceDelete();
        $notification=array(
            'message'=>'Service Deleted',
            'alert_type'=>'warning',
        );
        return  redirect()->back()->with($notification);
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
