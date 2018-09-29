<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maruf = User::create([
            'firstName'     => 'Maruf',
            'lastName'     => 'Alom',
            'email'    => 'desk.maruf@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        $adminRole = Role::where('name','=','admin')->first();
        $maruf->attachRole($adminRole);

        $iqbal = User::create([
            'firstName'     => 'Iqbal',
            'lastName'     => 'Ahmad',
            'email'    => 'iqbalh8622@gmail.com',
            'password' => Hash::make('123456'),
       
        ]);

        $iqbal->attachRole($adminRole);


        $babul = User::create([
            'firstName'     => 'Babul',
            'lastName'     => 'Mirdha',
            'email'    => 'babumirdha@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        $saRole = Role::where('name','=','sa')->first();
        $maruf->attachRole($saRole);
        $babul->attachRole($saRole);
        $babul->attachRole($adminRole);

       
    }
}
