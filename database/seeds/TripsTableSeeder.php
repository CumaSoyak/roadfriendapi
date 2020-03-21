<?php


use App\Models\City;
use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var \App\Models\Trip $trip1 */
        $trip1 = \App\Models\Trip::create([
            'date'  => '2020-03-10',
            'time'  => '22:28',
            'description'   => 'Description',
            'status'    => \App\Models\Trip::STATUS_CARGO,
        ]);

        $trip2 = \App\Models\Trip::create([
            'date'  => '2020-03-10',
            'time'  => '22:28',
            'description'   => 'Description1',
            'status'    => \App\Models\Trip::STATUS_TRANSPORTER,
        ]);

        $trip3 = \App\Models\Trip::create([
            'date'  => '2020-03-10',
            'time'  => '22:28',
            'description'   => 'Description2',
            'status'    => \App\Models\Trip::STATUS_PASSENGER,
        ]);

        $trip4 = \App\Models\Trip::create([
            'date'  => '2020-03-10',
            'time'  => '22:28',
            'description'   => 'Description3',
            'status'    => \App\Models\Trip::STATUS_CAR_TRAVELLER,
        ]);

        $trip5 = \App\Models\Trip::create([
            'date'  => '2020-03-10',
            'time'  => '22:28',
            'description'   => 'Description4',
            'status'    => \App\Models\Trip::STATUS_CAR_TRAVELLER,
        ]);

    }

}
