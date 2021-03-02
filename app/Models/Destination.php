<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Destination extends Model
{
    protected $table = 'destination';
    protected $guarded = [];
    use SoftDeletes;

    public function packages()
    {
        return $this->hasMany('App\Models\Packages', 'destnation_id', 'id');
    }
    public function region()
    {
        return $this->belongsTo('App\Models\Region', 'region_id', 'id');
    }
}
