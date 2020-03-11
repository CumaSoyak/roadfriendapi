<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class City extends Model
{
    protected $fillable = [
        'name',
        'population',
        'country_code',
        'location',
        'latitude',
        'longitude',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $geofields = [
        'location',
    ];
    protected $appends = [
        'distance'
    ];

    /*
    * SCOPE
    */
    public function scopeDistance($query, $location)
    {
        if ($location) {
            // Nulları en arkaya atmak için - ile çarpıp, sıralamayı asc yerine desc yazıyoruz.
            $query->orderBy(DB::raw('-distance'), 'desc');

            return $query->addSelect(DB::raw('st_distance(location,POINT(' . $location . '))*111195 as distance'));
        }

        return $query->addSelect(DB::raw('null as distance'));
    }

    /*
     * ATTRIBUTE
     */
    public function getLocationAttribute($value)
    {
        if (!isset($this->attributes['location'])) {
            return null;
        }

        $value = $this->attributes['location'];

        // Coordinate Check
        if (!preg_match('/POINT\((?<latitude>\-?\d+(\.\d+)?)[\s,](?<longitude>-?\d+(\.\d+)?)\)/', $value, $matches)) {
            return null;
        }

        $location = new \stdClass();
        $location->latitude = (float)$matches['latitude'];
        $location->longitude = (float)$matches['longitude'];

        return $location;
    }

    public function setLocationAttribute($value)
    {
        $this->attributes['location'] = DB::raw("POINT($value)");
    }

    public function getDistanceAttribute($value)
    {
        if (!isset($this->attributes['distance'])) {
            return null;
        }
        return $this->attributes['distance'];
    }

    public function newQueryWithoutScopes()
    {
        $raw = '';
        foreach ($this->geofields as $column) {
            $raw .= 'astext(' . $this->getTable() . '.' . $column . ') as ' . $column . ' ';
        }

        return parent::newQueryWithoutScopes()
            ->addSelect($this->getTable() . '.*', DB::raw($raw));
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function trips()
    {
        return $this->belongsToMany(Trip::class, 'trip_cities');
    }
}
