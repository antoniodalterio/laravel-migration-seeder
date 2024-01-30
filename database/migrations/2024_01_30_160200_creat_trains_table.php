<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company', 50);
            $table->string('departure_station', 50);
            $table->string('arrival station', 50);
            $table->dateTime('Departure time')->nullable();
            $table->dateTime('Arrival time')->nullable();
            $table->string('Train Code', 20)->nullable();
            $table->tinyInteger('number_of_carriages')->unsigned()->nullable();
            $table->boolean('deleted')->nullable();
            $table->timestamps();
        });

        /*Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato */

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('trains');
    }
};
