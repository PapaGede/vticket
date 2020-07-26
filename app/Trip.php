<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //
    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function order()
    {
        return $this->belongsTo('App\Order');
    }
}
