<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';

    public function city()
    {
        return $this->hasMany('App\City', 'province_id', 'id');
    }
}
