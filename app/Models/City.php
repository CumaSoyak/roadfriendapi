<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'title'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function trips()
    {
        return $this->belongsToMany(Trip::class, 'trip_cities');
    }
}
