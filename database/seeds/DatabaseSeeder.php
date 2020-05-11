<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UsersSeeder::class);
      $this->call(MesgsSeeder::class);
      $this->call(CentresSeeder::class);
      $this->call(CommentairesSeeder::class);
      $this->call(ChargeAffairesSeeder::class);
    }
}
