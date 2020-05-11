<?php

use Illuminate\Database\Seeder;

class CommentairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Commentaires::class, 60)->create();
    }
}
