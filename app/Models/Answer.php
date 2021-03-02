<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    protected $table = 'answer_master';
    protected $guarded = [];
    use SoftDeletes;
}
