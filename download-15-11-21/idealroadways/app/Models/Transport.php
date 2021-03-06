<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;
        protected $fillable = [
        'name',
        'phone',
        'location',
        'state',
        'district',
    ];

    public function MyState()
    {
    	return $this->belongsTo('App\Models\State','state','id');
    }
    public function MyDistrict()
    {
    	return $this->belongsTo('App\Models\District','district','id');
    }
}
