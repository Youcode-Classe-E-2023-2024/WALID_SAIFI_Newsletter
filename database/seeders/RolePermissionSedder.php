<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolePermissionSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissionSuppressionEmail = Permission::create(['name' => 'supprimer email']);
        $permissionModifierUtilisateur = Permission::create(['name' => 'modifier utilisateur']);
        $permissionSupprimerUtilisateur = Permission::create(['name' => 'supprimer utilisateur']);
        $permissionCreationTemplate = Permission::create(['name' => 'créer template']);
        $permissionEnvoyerTemplate = Permission::create(['name' => 'envoyer template']);
        $permissionModifierTemplate = Permission::create(['name' => 'modifier template']);
        $permissionGenererPDF = Permission::create(['name' => 'générer pdf']);

        $roleRedacteur = Role::create(['name' => 'rédacteur']);
        $roleAdmin = Role::create(['name' => 'admin']);


        $roleRedacteur->givePermissionTo($permissionModifierUtilisateur);
        $roleRedacteur->givePermissionTo($permissionSupprimerUtilisateur);
        $roleRedacteur->givePermissionTo($permissionCreationTemplate);
        $roleRedacteur->givePermissionTo($permissionEnvoyerTemplate);
        $roleRedacteur->givePermissionTo($permissionModifierTemplate);
        $roleRedacteur->givePermissionTo($permissionGenererPDF);


        // Ajout des permissions à l'administrateur


        $roleAdmin->givePermissionTo($permissionSuppressionEmail);
        $roleAdmin->givePermissionTo($permissionModifierUtilisateur);
        $roleAdmin->givePermissionTo($permissionSupprimerUtilisateur);
        $roleAdmin->givePermissionTo($permissionCreationTemplate);
        $roleAdmin->givePermissionTo($permissionEnvoyerTemplate);
        $roleAdmin->givePermissionTo($permissionModifierTemplate);
        $roleAdmin->givePermissionTo($permissionGenererPDF);

    }

}
