<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ammo extends Model
{
    
    public function hmFArms()
    {
        return $this->hasMany('App\Models\FArm', 'ammo_id', 'id');
    }
    
}
