<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomSearch extends Model
{
    protected $table = 'custom_search';
    protected $guarded = [];
    use SoftDeletes;

    public function categoryData()
    {
        return $this->belongsTo('App\Models\Category', 'category', 'id');
    }
}
