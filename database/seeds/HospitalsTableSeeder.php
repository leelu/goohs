<?php

use Illuminate\Database\Seeder;
use App\Hospital;
class HospitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('hospitals')->truncate();
        $hospitals = [
                        [
                            'name' => 'KHI Clinic',
                            'location' => 'Kigali Rwanda',
                            'is_activated' => 1
                        ],
                        [
                            'name' => 'CHUK Hospital',
                            'location' => 'Kigali Rwanda',
                            'is_activated' => 1
                        ]
                    ];

      foreach($hospitals as $hospital){
        Hospital::create($hospital);
      }
    }
}