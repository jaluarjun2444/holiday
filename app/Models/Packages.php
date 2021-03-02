<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Packages extends Model
{
    protected $table = 'package_master';
    protected $guarded = [];
    use SoftDeletes;

    public function Destination()
    {
        return $this->hasOne('App\Models\Destination', 'id', 'destination_id');
    }
    public function Region()
    {
        return $this->hasOne('App\Models\Region', 'id', 'region_id');
    }
    public function Images()
    {
        return $this->hasMany('App\Models\PackageImages', 'package_id', 'id');
    }
    public function Inclusion()
    {
        return $this->hasMany('App\Models\PackageInclusion', 'package_id', 'id');
    }
    public function Exclusion()
    {
        return $this->hasMany('App\Models\PackageExclusion', 'package_id', 'id');
    }
    public function Itinerary()
    {
        return $this->hasMany('App\Models\PackageItinerary', 'package_id', 'id');
    }
}
