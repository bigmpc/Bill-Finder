<?php
namespace Database\Factories;

use App\Models\Model;
use Str;

class BuildingAPIFactory
{
    /**
     * Make New model for api requests
     *
     * @return array
     * @throws \Exception
     */
    public static function make()
    {
        $faker = \Faker\Factory::create();
       

        $cites = ['tehran' , 'qeshem' ,'bandar'];
        return [
            'name' => $faker->streetName,
            'address' => $faker->address,
            'city' => $cites[random_int(0,2)],
            'google_map_url'=>$faker->url,
        ];

    }
}
