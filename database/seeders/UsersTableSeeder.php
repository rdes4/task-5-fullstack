<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user->name = "Rifqi";
        $user->email = "rifqides@gmail.com";
        $user->password = bcrypt('12345678'); 
        $user->save();
    }
}
