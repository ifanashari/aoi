<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FArm extends Model
{
    
    public function ammos()
    {
        return $this->belongsTo('App\Models\Ammo');
    }
    
}
