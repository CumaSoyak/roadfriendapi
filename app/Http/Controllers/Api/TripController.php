<?php

namespace App\Http\Controllers\Api;

use App\Models\City;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $status = $request->input('status');
        $startCity = $request->input('startCity');
        $endCity = $request->input('endCity');

        /** @var Trip $query */
        $query = Trip::query()->with('user.image', 'passenger.image', 'startCity', 'endCity');

        if($status) {
            $query->where('status', $status);
        }

        if($startCity) {
            $query->whereHas('startCity', function ($query) use ($startCity) {
                $query->where('name', $startCity);
            });
        }

        if($endCity) {
            $query->whereHas('endCity', function ($query) use ($startCity) {
                $query->where('name', $startCity);
            });
        }

        $model  = $query->get();

        return response()->success($model);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** @var User $user */
        $user = $request->user()
            ->load('image', 'city');


        $startCityId = $request->input('start_city_id');
        $endCityId = $request->input('end_city_id');

        if($startCityId) {
            $startCity = City::query()->find($startCityId);
            if(!$startCity) {
                return response()->error('city.not-found');
            }
        }

        if($endCityId) {
            $endCity = City::query()->find($endCityId);
            if(!$endCity) {
                return response()->error('city.not-found');
            }
        }

        $model = new Trip($request->input());
        $model->user()->associate($user);
        $model->startCity()->associate($startCity);
        $model->endCity()->associate($endCity);
        $model->save();

        return response()->success($model);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Trip::query()->find($id);
        if(!$model) {
            return response()->error('trip.not-found');
        }

        return response()->success($model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
