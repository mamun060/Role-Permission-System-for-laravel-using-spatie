<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::where('email' , 'mamun@gmail.com')->first();
        // user seeder 
        if(is_null($user)){
            $user = new User();
            $user->name = "mamun";
            $user->email = "mamun@gmail.com";
            $user->password = Hash::make('12345678');
            $user->save();
        }

    }
}
