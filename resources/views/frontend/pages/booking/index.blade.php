@extends('frontend.main_master')
@section('content')
<link href="{{ asset('frontend/assets/css/bk.css')}}" rel="stylesheet" type="text/css" media="all" />
@php
$rooms = DB::table('rooms')
->join('categories', 'categories.id', '=', 'rooms.room_type')
->select('rooms.*', 'categories.price','categories.category_name')
->paginate(6);

@endphp
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-9 col-lg-10 col-md-11">
            <div class="card rounded-0 b-0">
              
                <div class="row d-flex justify-content-sm-end justify-content-start px-5">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="row d-flex justify-content-sm-end justify-content-start px-5">
                    <div class="count text-center">
                        <p class="mb-sm-0 pb-sm-0"><strong><span id="cnt">25</span>%</strong> <span
                                class="yellow-text">Completed</span></p>
                    </div>
                </div>
                <div class="card-body show pt-0">
                    <h4 class="heading mb-4 pb-1">What should be done?</h4>
                    <div class="radio-group row justify-content-between px-3">
                        @foreach ($rooms as $item)
                        <div class="card-block radio">
                            <div class="row justify-content-end d-flex px-3">
                                <div class="fa fa-circle"></div>
                            </div>
                            <div class="row justify-content-center">
                              
                                    <div class="col-5">

                                        <div class="room-booking-image-holder">
                                            <img src="{{  asset($item->room_image)}}" title=""
                                                class="room-booking-image-holder-img" />
                                        </div>
                                    </div>
                                    <div class="col-7 pl-3">

                                         <!-- keeps the original check-in, check-out date, and # of rooms populated between pages-->
                                            <!-- even though they aren't used in the program in any other way -->
                                            <input type="hidden" value="{{ $item->id }}" name="room_id" />
                                            <input type="hidden" value="{{ $item->price }}" name="room_price" />
                                            <input type="hidden" value="{{ $item->category_name }}" name="room_name" />
                                            <p><strong>Room Type: </strong>{{ $item->category_name }}<br />
                                                <strong>Max Adults:</strong> {{ $item->max_adult }},<br />
                                                <strong>Max Children:</strong> {{ $item->max_child }}<br />
                                                <strong>Rate per Night: </strong>{{ $item->price }}
                                            </p>

                                    </div>


                                    <!-- END .rooms-wrapper -->
                            

                            </div>
                        </div>
                        @endforeach


                    </div>
                    <div class="row justify-content-center"> <button class="btn btn-blue next mx-2" id="next1">Next<span
                                class="fa fa-long-arrow-right"></span></button> </div>
                </div>
                <div class="card-body pt-0">
                    <h4 class="heading mb-4 pb-1">Personal details</h4>
                    <label class="text-danger mb-3">*
                        Required</label>
                    <div class="form-group">
                        <label class="form-control-label">First Name * :</label>
                        <input type="text" id="fname" name="fname" placeholder="" class="form-control"
                            onblur="validate1(1)">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Last Name * :</label>
                        <input type="text" id="lname" name="lname" placeholder="" class="form-control"
                            onblur="validate1(2)">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Email ID * :</label>
                        <input type="text" id="email" name="email" placeholder="" class="form-control"
                            onblur="validate1(3)"> </div>
                    <div class="form-group"> <label class="form-control-label">Contact No. * :</label> <input
                            type="text" id="mob" name="mob" placeholder="" class="form-control" onblur="validate1(4)">
                    </div>
                    <div class="row justify-content-center"> <button class="btn btn-secondary prev mx-2"><span
                                class="fa fa-long-arrow-left"></span>Back</button> <button
                            class="btn btn-blue next mx-2" id="next2" onclick="validate1(0)">Next<span
                                class="fa fa-long-arrow-right"></span></button> </div>
                </div>
                <div class="card-body pt-0">
                    <h4 class="heading mb-4 pb-1">Website details</h4> <label class="text-danger mb-3">*
                        Required</label>
                    <div class="form-group"> <label class="form-control-label">Company Name :</label> <input type="text"
                            id="cname" name="cname" placeholder="" class="form-control" onblur="validate2(1)"> </div>
                    <div class="form-group"> <label class="form-control-label">Zip Code :</label> <input type="text"
                            id="zip" name="zip" placeholder="" class="form-control" onblur="validate2(2)"> </div>
                    <div class="form-group"> <label class="form-control-label">Website Title * :</label> <input
                            type="text" id="title" name="title" placeholder="" class="form-control"
                            onblur="validate2(3)"> </div>
                    <div class="form-group"> <label class="form-control-label">Website Description * :</label> <input
                            type="text" id="desc" name="desc" placeholder="" class="form-control" onblur="validate2(4)">
                    </div>
                    <div class="form-group"> <label class="form-control-label">Website Type :</label>
                        <div class="select mb-3"> <select name="type-info" class="form-control">
                                <option>E-commerce</option>
                                <option>Entertainment</option>
                                <option>Personal</option>
                                <option>Business</option>
                                <option>Portfolio</option>
                                <option>Education</option>
                            </select> </div>
                    </div>
                    <div class="row justify-content-center"> <button class="btn btn-secondary prev mx-2"><span
                                class="fa fa-long-arrow-left"></span>Back</button> <button
                            class="btn btn-blue next mx-2" id="next3" onclick="validate2(0)">Next<span
                                class="fa fa-long-arrow-right"></span></button> </div>
                </div>
                <div class="card-body pt-0">
                    <h4 class="heading mb-4 pb-1">Confirmation</h4>
                    <div class="row justify-content-start px-3">
                        <p>Form has been submitted Successfully ! <br>You will recieve estimation on your email id and
                            contact no.</p>
                    </div>
                    <div class="row justify-content-center"> <img src="https://i.imgur.com/krsWHvd.gif" class="check">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script>
    function validate1(val) {
v1 = document.getElementById("fname");
v2 = document.getElementById("lname");
v3 = document.getElementById("email");
v4 = document.getElementById("mob");

flag1 = true;
flag2 = true;
flag3 = true;
flag4 = true;

if(val>=1 || val==0) {
if(v1.value == "") {
v1.style.borderColor = "red";
flag1 = false;
}
else {
v1.style.borderColor = "green";
flag1 = true;
}
}

if(val>=2 || val==0) {
if(v2.value == "") {
v2.style.borderColor = "red";
flag2 = false;
}
else {
v2.style.borderColor = "green";
flag2 = true;
}
}

if(val>=3 || val==0) {
if(v3.value == "") {
v3.style.borderColor = "red";
flag3 = false;
}
else {
v3.style.borderColor = "green";
flag3 = true;
}
}

if(val>=4 || val==0) {
if(v4.value == "") {
v4.style.borderColor = "red";
flag4 = false;
}
else {
v4.style.borderColor = "green";
flag4 = true;
}
}

flag = flag1 && flag2 && flag3 && flag4;

return flag;
}

function validate2(val) {
v3 = document.getElementById("title");
v4 = document.getElementById("desc");

flag3 = true;
flag4 = true;

if(val>=3 || val==0) {
if(v3.value == "") {
v3.style.borderColor = "red";
flag3 = false;
}
else {
v3.style.borderColor = "green";
flag3 = true;
}
}

if(val>=4 || val==0) {
if(v4.value == "") {
v4.style.borderColor = "red";
flag4 = false;
}
else {
v4.style.borderColor = "green";
flag4 = true;
}
}

flag = flag3 && flag4;

return flag;
}

$(document).ready(function(){

var current_fs, next_fs, previous_fs;

var steps = $(".card-body").length;
var current = 1;
setProgressBar(current);

$(".next").click(function(){

str1 = "next1";
str2 = "next2";
str3 = "next3";

if(!str2.localeCompare($(this).attr('id')) && validate1(0) == true) {
val2 = true;
}
else {
val2 = false;
}

if(!str3.localeCompare($(this).attr('id')) && validate2(0) == true) {
val3 = true;
}
else {
val3 = false;
}

if((!str1.localeCompare($(this).attr('id'))) || (!str2.localeCompare($(this).attr('id')) && val2 == true) || (!str3.localeCompare($(this).attr('id')) && val3 == true)) {
current_fs = $(this).parent().parent();
next_fs = $(this).parent().parent().next();

$(current_fs).removeClass("show");
$(next_fs).addClass("show");

current_fs.animate({}, {
step: function() {

current_fs.css({
'display': 'none',
'position': 'relative'
});

next_fs.css({
'display': 'block'
});
}
});
setProgressBar(++current);
var c = document.getElementById('cnt').textContent;
document.getElementById('cnt').textContent = Number(c) + 25;
}
});

$(".prev").click(function(){

current_fs = $(this).parent().parent();
previous_fs = $(this).parent().parent().prev();

$(current_fs).removeClass("show");
$(previous_fs).addClass("show");

current_fs.animate({}, {
step: function() {

current_fs.css({
'display': 'none',
'position': 'relative'
});

previous_fs.css({
'display': 'block'
});
}
});
setProgressBar(--current);
var c = document.getElementById('cnt').textContent;
document.getElementById('cnt').textContent = Number(c) - 25;
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar").css("width",percent+"%");
}

$('.radio-group .radio').click(function(){
$('.selected .fa').removeClass('fa-check');
$('.selected .fa').addClass('fa-circle');
$('.radio').removeClass('selected');
$(this).addClass('selected');
$('.selected .fa').removeClass('fa-circle');
$('.selected .fa').addClass('fa-check');
});

});
</script>

@endsection