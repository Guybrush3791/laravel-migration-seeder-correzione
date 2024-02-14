<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {

            $table -> id();

            $table -> string('agency', 60);

            $table -> string('start_station', 60);
            $table -> string('end_station', 60);

            $table -> datetime('start_time');
            $table -> datetime('end_time');

            $table -> string('code', 11) -> unique();
            $table -> integer('carriages_count');

            $table -> boolean('in_time') -> default(true);
            $table -> boolean('deleted') -> default(false);

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
