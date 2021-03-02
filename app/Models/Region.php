<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    protected $table = 'region';
    protected $guarded = [];
    use SoftDeletes;

    public function Destination()
    {
        return $this->hasMany('App\Models\Destination', 'region_id', 'id');
    }
}
