<?php

use Illuminate\Database\Seeder;
use App\Information;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Information::create([
            //'With millions of people bein forced to stay home to help stop the spread of COVID-19 during recent months, MFL Galxy has found creative ways to continue online tuition through Zoom'
        ]);
    }
}
