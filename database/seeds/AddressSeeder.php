<?php

use Illuminate\Database\Seeder;
use App\Models\Address\Province;
use App\Models\Address\City;
use App\Models\Address\Subdistrict;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Province::populate();
        City::populate();
        Subdistrict::populate();
    }
}
