@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="bg-white border rounded">
    <div class="row no-gutters">
        <div class="col-lg-4 col-xl-3">
            <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                <div class="card text-center widget-profile px-0 border-0">
                    <div class="card-img mx-auto rounded-circle">
                        <img src="{{ (!empty($adminData->profile_photo_path))? url('backend/uploads/admin_images/'.$adminData->profile_photo_path) : url('backend/assets/img/user/user.png')}}"
                            alt="user image">
                    </div>
                    <div class="card-body">
                        <h4 class="py-1 text-dark">{{ $adminData->name }}</h4>
                        {{--  <p>{{ $adminData->email }}</p> --}}

                    </div>
                </div>

                <hr class="w-100">
                <div class="contact-info pt-4">
                    <h5 class="text-dark mb-1">Contact Information</h5>
                    <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                    <p>{{ $adminData->email }}</p>

                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xl-9">
            <div class="profile-content-right py-5">
                <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                            aria-controls="settings" aria-selected="false">Change Password</a>
                    </li>
                </ul>
                <div class="tab-content px-3 px-xl-5" id="myTabContent">

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="mt-3">

                            <form method="POST" action="{{ route('admin.profile.edit') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="admin_name">Admin Name</label>
                                            <input type="text" class="form-control" name="admin_name" id="admin_name"
                                                value="{{ $adminData->name }}">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Admin Email address</label>
                                            <input type="email" name="admin_email" class="form-control" id="admin_email"
                                                value="{{ $adminData->email }}">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Profile Image</label>
                                            <input type="file" class="form-control-file" name="profile_photo_image"
                                                id="image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img id="showImage"
                                            src="{{ (!empty($adminData->profile_photo_path))? url('backend/uploads/admin_images/'.$adminData->profile_photo_path) : url('backend/assets/img/user/user.png')}}"
                                            alt="user image" width="100" height="100">
                                    </div>
                                </div>



                                <div class="form-footer pt-4  mt-4 border-top">
                                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                                    <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                                </div>
                            </form>


                        </div>
                    </div>
                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <div class="mt-3">

                            <form method="post" action="{{ route('update.change.password') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="current_password">Currrent Password</label>
                                    <input type="password" class="form-control" id="current_password" name="current_password"
                                        placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <input type="password" class="form-control" id="new_password" name="new_password"
                                        placeholder="New Password">
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                        placeholder="Confirm Password">
                                </div>

                                <div class="form-footer pt-4 mt-4 border-top">
                                    <button type="submit" class="btn btn-primary btn-default">Change Password</button>
                                    <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




</div>

<script type="text/javascript">
    $(document).ready(function() {
$('#image').change(
    function(e) {
        var reader = new FileReader();
        reader.onload=function(e){
            $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
        
    }
);
    
});
</script>
@endsection