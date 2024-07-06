<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=[
      
        'checkin',
        'checkout',
        'number_guest',
        'first_name',
        'last_name',
        'email_address',
        'phone_number',
        'special-request',
              
    ];
   
}
