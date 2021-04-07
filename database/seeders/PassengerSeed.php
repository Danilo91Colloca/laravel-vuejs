<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Passenger;
class PassengerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $passengersList = [
            [
                'name'=>'Ciccio',
                'lastname'=>'Occic',
                'age'=>'25'
            ],
            [
                'name'=>'Pippo',
                'lastname'=>'Oppip',
                'age'=>'41'
            ],
            [
                'name'=>'Marta',
                'lastname'=>'Atram',
                'age'=>'30'
            ],
            [
                'name'=>'Paperina',
                'lastname'=>'Anirepap',
                'age'=>'30'
            ]
        ];
        //se si scrive tutto in array si può utilizzare il fill nel seeder
        // dando a ciascun sotto array le stesse key della column
        foreach($passengersList as $passengerItem) {
            $newPassenger = new Passenger();
            $newPassenger->fill($passengerItem);
            $newPassenger->save();

        }

    }
}
