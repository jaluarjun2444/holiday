<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostSites extends Model
{
    protected $table = 'post_sites';
    protected $guarded = [];
    use SoftDeletes;

    public function posts()
    {
        return $this->hasMany('App\Models\Posts', 'site_id', 'id');
    }
}
