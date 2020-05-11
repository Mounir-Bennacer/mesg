<?php

use Illuminate\Database\Seeder;
use App\ChargeAffaires;

class ChargeAffairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ChargeAffaires::class, 30)->create();
    }
}
