<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'mobile' => '0956200574',
                'password' => 'password',
            ]

        ];
        // استخدام المصفوفة لإدخال البيانات
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
