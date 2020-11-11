<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    use HasFactory;

    protected  $primaryKey = 'lga_id';

    public function getState() {
        return $this->belongsTo('App\Models\State', 'state_id', 'state_id');
    }

    public function getPollingUnits() {
        return $this->hasMany('App\Models\PollingUnit', 'lga_id', 'lga_id');
    }
}
