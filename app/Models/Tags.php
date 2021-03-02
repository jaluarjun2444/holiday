<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tags extends Model
{
    protected $table = 'tags';
    protected $guarded = [];
    use SoftDeletes;
}