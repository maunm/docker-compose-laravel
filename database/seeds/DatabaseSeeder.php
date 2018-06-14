<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('users')->delete();
        $users = array(
            ['name' => 'Mauricio', 'email' => 'mauriciogn@thehangar.cr', 'password' => Hash::make('secret')],
            ['name' => 'Test user', 'email' => 'test@gmail.com', 'password' => Hash::make('secret')],
        );
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user) {
            User::create($user);
        }
        Model::reguard();
    }
}
