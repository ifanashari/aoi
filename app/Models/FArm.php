<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FArm extends Model
{
    
    public function ammo()
    {
        return $this->belongsTo('App\Models\Ammo', 'ammo_id', 'id');
    }

    public function ftype()
    {
        return $this->belongsTo('App\Models\FType', 'type_id', 'id');
    }
    
}
