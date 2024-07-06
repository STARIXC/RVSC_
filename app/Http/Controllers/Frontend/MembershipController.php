<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\MembersType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
class MembershipController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = DB::table('categories')
        // ->latest()
        // ->paginate(9);
        $membership= MembersType::latest()->paginate('6');
        $trashedMemberships=MembersType::onlyTrashed()->latest()->paginate(5);
        return view('admin.membership.membership', compact('membership','trashedMemberships'));
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
            'membership_name' => 'required|max:255',
            'description' => 'required',
            'membership_icon' => 'required|mimes:png,jpg,jpeg',
           
        ],
        [
            'membership_name.required'=>'Please Input Service Name',
            'description.required'=>'Please Input Service Description',
            'membership_icon.required'=>'Please choose an Image for this Service',
        ]
    );

    // dd($request);
    $rimage=$request->file('membership_icon');
    $make_name = hexdec(uniqid()).'.'.$rimage->getClientOriginalExtension();
      Image::make($rimage)->resize(600,600)->save('backend/assets/images/membership/'.$make_name);
      $last_image = 'backend/assets/images/membership/'.$make_name;
      MembersType::insert([
        'membership_name'=>$request->membership_name,
        'description'=>$request->description,
        'membership_icon'=>$last_image,
      ]);
    //   $notification=array(
    //     'message'=>'Service Inserted Successfully',
    //     'alert_type'=>'info',
    // );
   return  redirect()->route('membership.all')->with('success','Category Updated Successfull');
    }



     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membership=  DB::table('members_types')->where('id',$id)->first();
    
        return view('frontend.pages.membership.membership_details',compact('membership'));
    }
     /**
     * soft delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function softDelete($id)
    {
        $delete=MembersType::find($id)->delete();
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
        $restore_deleted=MembersType::withTrashed()->find($id)->restore();

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
        $pdelete=MembersType::onlyTrashed()->find($id)->forceDelete();
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
    public function frontEndMembership(){
        $membership = DB::table('members_types')->get();
        // dd($membership);
        return view('frontend.pages.membership.index', compact('membership'));

    }
}
