<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trip extends Model
{
    use SoftDeletes;

    const STATUS_PASSENGER = 1;
    const STATUS_CAR_TRAVELLER = 2;
    const STATUS_TRANSPORTER = 3;
    const STATUS_CARGO = 4;

    const STATUSES = [
        self::STATUS_PASSENGER,
        self::STATUS_CAR_TRAVELLER,
        self::STATUS_TRANSPORTER,
        self::STATUS_CARGO
    ];

    protected $fillable = [
        'status',
        'date',
        'time',
        'description',

        'user_id',
        'passenger_id',

        'start_city_id',
        'end_cit_id',
    ];

    protected $hidden = [
        'user_id',
        'passenger_id',

        'start_city_id',
        'end_cit_id',

        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function passenger()
    {
        return $this->belongsTo(User::class);
    }

    public function startCity()
    {
        return $this->belongsTo(City::class);
    }

    public function endCity()
    {
        return $this->belongsTo(City::class);
    }
}
