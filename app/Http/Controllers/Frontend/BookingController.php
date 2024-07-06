<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ReserveMail;
use App\Mail\AutoResponse;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{

    public function postBooking(Request $request)
    {

        $validated = $request->validate(
            [
                'checkin' => 'required',
                'checkout' => 'required',
                'number_guest' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email_address' => 'required',
                'phone_number' => 'required',

            ],
            [

                'checkin' => 'Please Select Checkin Date',
                'checkout' => 'Please Select Checkout Date',
                'number_guest' => 'Please Select Checkout Date',
                'first_name' => 'Please Input First Name',
                'last_name' => 'Please Input Last Name',
                'email_address' => 'Please Input Email Address',
                'phone_number' => 'Please Input Valid phone Number',

            ]
        );
        // room_id
        // Age
        // member_number
        // special_request
        //         price_one_pax
        // price_two_pax
        // checkout
        // number_guest
  
            $data = array();
            $data['check_in']=$request->checkin;
            $data['checkout']=$request->checkout;
            $data['number_guest']=$request->number_guest;
            $data['first_name']=$request->first_name;
            $data['last_name']=$request->last_name;
            $data['email']=$request->email_address;
            $data['phone']=$request->phone_number;
            $data['member_number']=$request->member_number;
            $data['specialrequest']=$request->special_request;
            $data['price']=$request->price_one_pax;
            $data['price_double']=$request->price_two_pax;
            $data['roomtype']=$request->room_id;
         
            // dd($data);

            $save=DB::table('bookings')->insert($data);
            if ($save) {
                $reservation_mail='reservations@rvsc.co.ke';
                $respons_mail=$data['email'];
                $reserve=$details=$data;
                
                // call mailablr
                // pass reservation data from form
                Mail::to($respons_mail)->send(new AutoResponse($details));
                Mail::to($reservation_mail)->send(new ReserveMail($reserve));
                return view('frontend.pages.booking.booking_successful');
            }else{
                echo 'Error';
                return back();
    
            }
    
 
        }
        
}
