<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Redirect;

class AdminProfileController extends Controller
{
    public function AdminProfile(){
        $adminData = Admin::find(1);
        return view('admin.profile.admin_profile_view',compact('adminData'));
    }
    public function EditAdminProfile(Request $request){
        $data=Admin::find(1);
        $data->name=$request->admin_name;
        $data->email=$request->admin_email;

        if ($request->file('profile_photo_image')) {
            $file=$request->file('profile_photo_image');
            @unlink('backend/uploads/admin_images'.$data->profile_photo_path);
            $file_name= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('backend/uploads/admin_images'),$file_name); 
            $data['profile_photo_path']=$file_name;
        }
        $data->save();
        $notification= array(
            'message'=>'Admin profile Updated Successfully',
            'alert-type'=>'success'
        );
       return redirect()->route('admin.profile')->with($notification);
    }
    public function AdminUpdateChangePassword(Request $request){

       $request->validate([
            'current_password'=>'required',
            'new_password'=>'required|confirmed',
            
        ]);
        $hashedPassword= Admin::find(1)->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            $admin=Admin::find(1);
            $admin->password= Hash::make($request->new_password);
            $admin->save();
            Auth::logout();
            return Redirect()->route('admin.logout');
        }else{
            $notification= array([
                'message'=>'Failled to update password',
                'alert_type'=>'warming'
            ]);
            return redirect()->back()->with($notification);
        }
}


}
