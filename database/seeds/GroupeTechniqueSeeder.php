<?php

use Illuminate\Database\Seeder;
use App\GroupeTechnique;

class GroupeTechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(GroupeTechnique::class, 1)->create();
    }
}
