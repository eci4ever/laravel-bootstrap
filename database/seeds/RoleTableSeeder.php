<?php
// php artisan make:seeder RoleTableSeeder

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'         => 1,
                'title'      => 'Admin',
                'created_at' => '2020-04-26 19:13:32',
                'updated_at' => '2020-04-26 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 2,
                'title'      => 'Manager',
                'created_at' => '2020-04-26 19:13:32',
                'updated_at' => '2020-04-26 19:13:32',
                'deleted_at' => null,
            ],
            [
                'id'         => 3,
                'title'      => 'User',
                'created_at' => '2020-04-26 19:13:32',
                'updated_at' => '2020-04-26 19:13:32',
                'deleted_at' => null,
            ]
        ];

        Role::insert($roles);
    }
}
