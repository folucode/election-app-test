<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollingUnit extends Model
{
    use HasFactory;
    
    protected  $primaryKey = 'uniqueid';

    public function getResult() {
        return $this->hasMany('App\Models\AnnouncedPuResults', 'polling_unit_uniqueid', 'uniqueid');
    }

    public function getLga() {
        return $this->belongsTo('App\Models\Lga', 'lga_id', 'lga_id');
    }
}
