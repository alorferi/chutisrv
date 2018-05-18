<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'sa',
           // 'slug' => 'Admin',
            // 'permissions' => json_encode([
            //     'update-post' => true,
            //     'publish-post' => true,
            // ]),
        ]);

    
        $admin = Role::create([
            'name' => 'admin',
           // 'slug' => 'Admin',
            // 'permissions' => json_encode([
            //     'update-post' => true,
            //     'publish-post' => true,
            // ]),
        ]);
    }
}
