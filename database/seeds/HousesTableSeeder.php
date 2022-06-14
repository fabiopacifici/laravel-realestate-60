<?php

use App\House;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $houses = config('db.houses');

        foreach ($houses as $house) {
            # code...
            $new_house = new House();
            $new_house->price = $house['price'];
            $new_house->address = $house['address'];
            $new_house->post_code = $house['post_code'];
            $new_house->city = $house['city'];
            $new_house->square_meters = $house['square_meters'];
            $new_house->rooms = $house['rooms'];
            $new_house->bathrooms = $house['bathrooms'];
            $new_house->floors = $house['floors'];
            $new_house->description = $house['description'];
            $new_house->energy_rating = $house['energy_rating'];
            $new_house->type = $house['type'];
            $new_house->image = $house['image'];
            $new_house->is_available = $house['is_available'];
            $new_house->note = $house['note'];
            $new_house->contract = $house['contract'];
            $new_house->save();

        }

    }
}
