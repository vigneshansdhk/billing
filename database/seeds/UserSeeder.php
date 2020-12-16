<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
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
   
        $arr = [
        	[
        		'name' 				=> 'Admin',
        		'email'				=> 'admin@gmail.com',
        		'number' 			=> '1234567890',
        		'email_verified_at' => Carbon::now(),
        		'password'			=> Hash::make('cement@143'),
                'is_admin'          => 0

        	],
        	[
        		'name' 				=> 'Super Admin',
        		'email'				=> 'admin1@gmail.com',
        		'number' 			=> '1234567890',
        		'email_verified_at' => Carbon::now(),
        		'password'			=> Hash::make('cement@143'),
        		'is_admin'			=> 1
        	],
        	
        ];

        foreach ($arr as $key => $value) {
        	$user 						= new User;
        	$user->name 				= $value['name'];
        	$user->email 				= $value['email'];
        	$user->number 				= $value['number'];
        	$user->email_verified_at 	= $value['email_verified_at'];
            $user->password             = $value['password'];
        	$user->is_admin 			= $value['is_admin'];
        	$user->save();
        }
    }
}
