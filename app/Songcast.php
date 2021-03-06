<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Songcast extends Model
{
    protected $table = 'songcasts';

    public function cast()
    {
        return $this->belongsTo('App\Cast');
    }
}
