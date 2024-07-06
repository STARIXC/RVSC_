<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'site_images';
    protected $fillable=[
        'image_name',
        'gallery',
        'main_page',
        'events_page',
        'image_description',
    ];
}
