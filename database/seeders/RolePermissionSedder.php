<?php
namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolePermissionSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissionSuppressionEmail = Permission::firstOrCreate(['name' => 'supprimer email']);
        $permissionModifierUtilisateur = Permission::firstOrCreate(['name' => 'modifier utilisateur']);
        $permissionSupprimerUtilisateur = Permission::firstOrCreate(['name' => 'supprimer utilisateur']);
        $permissionCreationTemplate = Permission::firstOrCreate(['name' => 'créer template']);
        $permissionEnvoyerTemplate = Permission::firstOrCreate(['name' => 'envoyer template']);
        $permissionModifierTemplate = Permission::firstOrCreate(['name' => 'modifier template']);
        $permissionGenererPDF = Permission::firstOrCreate(['name' => 'générer pdf']);

        $roleRedacteur = Role::firstOrCreate(['name' => 'rédacteur' , 'guard_name' => 'web']);
        $roleAdmin = Role::firstOrCreate(['name' => 'admin' , 'guard_name' => 'web']);
        $rolevieux = Role::firstOrCreate(['name' => 'viewer' , 'guard_name' => 'web']);


        $roleRedacteur->givePermissionTo($permissionModifierUtilisateur);
        $roleRedacteur->givePermissionTo($permissionCreationTemplate);
        $roleRedacteur->givePermissionTo($permissionEnvoyerTemplate);
        $roleRedacteur->givePermissionTo($permissionGenererPDF);

        $roleAdmin->givePermissionTo($permissionSuppressionEmail);
        $roleAdmin->givePermissionTo($permissionModifierUtilisateur);
        $roleAdmin->givePermissionTo($permissionSupprimerUtilisateur);
        $roleAdmin->givePermissionTo($permissionCreationTemplate);
        $roleAdmin->givePermissionTo($permissionEnvoyerTemplate);
        $roleAdmin->givePermissionTo($permissionModifierTemplate);
        $roleAdmin->givePermissionTo($permissionGenererPDF);

    }

}
