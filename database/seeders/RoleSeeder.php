<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class roleSeeder extends Seeder
{

    public function run(): void
    {

           Role::create(['name' => 'rédacteur' , 'guard_name' => 'web']);
           Role::create(['name' => 'admin' , 'guard_name' => 'web']);
           Role::create(['name' => 'viewer' , 'guard_name' => 'web']);
    }
}
