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
         $this->call("CountriesTableSeeder");
         $this->call("AreasTableSeeder");
         $this->call("RamadansTableSeeder");
         $this->call("AppsTableSeeder");
         $this->call("LanguagesTableSeeder");
         $this->call("RolesTableSeeder");
         $this->call("UsersTableSeeder");
    }
}
