<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table = "tag";

    public function Article()
    {
        return $this->belongsTo('App\Article');
    }
}
