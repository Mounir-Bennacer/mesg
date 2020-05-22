<?php

use Illuminate\Database\Seeder;

use \App\Mesg;

class MesgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Mesg::class, 350)->create();
    }
}
