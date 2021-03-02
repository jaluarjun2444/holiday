<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    protected $table = 'question_master';
    protected $guarded = [];
    use SoftDeletes;

    public function answerData()
    {
        return $this->hasMany('App\Models\Answer', 'q_id', 'id');
    }
    public function categoryData()
    {
        return $this->belongsTo('App\Models\Category', 'category', 'id');
    }
}
