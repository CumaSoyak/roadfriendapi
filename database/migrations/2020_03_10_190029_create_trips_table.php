<?php

use App\Models\Trip;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('status', Trip::STATUSES);
            $table->date('date');
            $table->string('time');
            $table->text('description');
            $table->softDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')
                ->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('passenger_id')->nullable();
            $table->foreign('passenger_id')->references('id')
                ->on('users')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('start_city_id')->nullable();
            $table->foreign('start_city_id')->references('id')
                ->on('cities')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('end_city_id')->nullable();
            $table->foreign('end_city_id')->references('id')
                ->on('cities')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
