<?php
// php artisan make:seeder UserTableSeeder
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@local.com',
                'password'       => '$2y$10$imU.Hdz7VauIT3LIMCMbsOXvaaTQg6luVqkhfkBcsUd.SJW2XSRKO',
                'remember_token' => null,
                'created_at'     => '2020-04-26 19:13:32',
                'updated_at'     => '2020-04-26 19:13:32',
                'deleted_at'     => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Manager',
                'email'          => 'manager@local.com',
                'password'       => '$2y$10$imU.Hdz7VauIT3LIMCMbsOXvaaTQg6luVqkhfkBcsUd.SJW2XSRKO',
                'remember_token' => null,
                'created_at'     => '2020-04-26 19:13:32',
                'updated_at'     => '2020-04-26 19:13:32',
                'deleted_at'     => null,
            ],
            [
                'id'             => 3,
                'name'           => 'User',
                'email'          => 'user@local.com',
                'password'       => '$2y$10$imU.Hdz7VauIT3LIMCMbsOXvaaTQg6luVqkhfkBcsUd.SJW2XSRKO',
                'remember_token' => null,
                'created_at'     => '2020-04-26 19:13:32',
                'updated_at'     => '2020-04-26 19:13:32',
                'deleted_at'     => null,
            ]
        ];

        User::insert($users);
    }
}
