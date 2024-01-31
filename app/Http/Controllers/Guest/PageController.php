<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Trains::all();
        return view('welcome', compact('trains'));

    }

    public function create()
    {
        /*
        $table->bigIncrements('id');
            $table->string('company', 50);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->dateTime('Departure time')->nullable();
            $table->dateTime('Arrival time')->nullable();
            $table->string('Train Code', 20)->nullable();
            $table->tinyInteger('number_of_carriages')->unsigned()->nullable();
            $table->boolean('deleted')->nullable();
            $table->timestamps();
            */
        $train = new Trains();
        $train->company = 'Freccia Rossa';
        $train->departure_station = 'Napoli';
        $train->arrival_station = 'Roma';
        $train->departure_time = '15:00:00';
        $train->arrival_time = '17:00:00';
        $train->train_code = 'aabb00223344';
        $train->number_of_carriages = 10;
        $train->deleted = false;


        $train->save();
        return redirect()->route('train');

    }

}
