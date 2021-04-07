<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Passenger;
class ApiPassenger extends Controller
{
    public function getPassengers() {
        //creo l'api che rtorna il contenuto del DB
       $passenger= Passenger::all();

       return response()->json($passenger);
    }
}
