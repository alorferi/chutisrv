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

        $role = Role::where('name','=','admin')->first();
        $maruf->attachRole($role);

        $iqbal = User::create([
            'firstName'     => 'Iqbal',
            'lastName'     => 'Ahmad',
            'email'    => 'iqbalh@gmail.com',
            'password' => Hash::make('123456'),
       
        ]);

        $iqbal->attachRole($role);


        $babul = User::create([
            'firstName'     => 'Babul',
            'lastName'     => 'Mirdha',
            'email'    => 'babumirdha@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        $role = Role::where('name','=','sa')->first();
        $maruf->attachRole($role);
        $babul->attachRole($role);

       
    }
}
