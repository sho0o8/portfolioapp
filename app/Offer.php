<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
