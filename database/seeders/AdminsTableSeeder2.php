<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('123456');
        $adminRecords = [
            ['id' => 2, 'name' => 'durukan', 'type' => 'admin', 'mobile' => '12345', 'email' => 'durukan@engineer.com', 'password' => $password, 'image' => '', 'status' => '1']
        ];
        Admin::insert($adminRecords);
    }
}