<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'Super Admin Micro Finance',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123456')
        ];
        Admin::create($admin);
    }
}
