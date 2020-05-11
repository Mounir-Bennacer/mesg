<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 20)->create();
        $user = User::create([
            'nom' => 'bennacer',
            'prenom' => 'mounir',
            'nni' => 'I90873',
            'gaia' => 'EN4116',
            'email' => 'mounir.bennacer@grdf.fr',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            ]
        );
    }
}
