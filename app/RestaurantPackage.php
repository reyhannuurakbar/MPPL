<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RestaurantPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'image','title','slug','about','packages_description','packages_1','packages_2','packages_3','packages_4','time','location','price_booking'

    ];

    protected $hidden = [

    ];

}
