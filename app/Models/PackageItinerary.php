<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageItinerary extends Model
{
    protected $table = 'package_itinerary';
    protected $guarded = [];
    use SoftDeletes;

    public function Package()
    {
        return $this->belongsTo('App\Models\Packages', 'package_id', 'id');
    }
}
