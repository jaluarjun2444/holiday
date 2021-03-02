<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageExclusion extends Model
{
    protected $table = 'package_exclusion';
    protected $guarded = [];
    use SoftDeletes;

    public function Package()
    {
        return $this->belongsTo('App\Models\Packages', 'package_id', 'id');
    }
}
