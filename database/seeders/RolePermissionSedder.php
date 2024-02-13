<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mediaCreationPermission = Permission::create(['name' => 'create media']);
        $softDeleteEmailPermission = Permission::create(['name' => 'delete email']);


        $redacteurRole = Role::create(['name' => 'redacteur']);
        $adminRole = Role::create(['name' => 'admin']);
        //$utilisateurRole = Role::create(['name' => 'utilisateur']);

        $redacteurRole->givePermissionTo($mediaCreationPermission);
        $adminRole->givePermissionTo($softDeleteEmailPermission);
    }
}
