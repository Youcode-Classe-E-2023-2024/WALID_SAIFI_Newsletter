<?php

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Création des permissions
        $permissionSuppressionEmail = Permission::firstOrCreate(['name' => 'supprimer email']);
        $permissionModifierUtilisateur = Permission::firstOrCreate(['name' => 'modifier utilisateur']);
        $permissionSupprimerUtilisateur = Permission::firstOrCreate(['name' => 'supprimer utilisateur']);
        $permissionCreationTemplate = Permission::firstOrCreate(['name' => 'créer template']);
        $permissionEnvoyerTemplate = Permission::firstOrCreate(['name' => 'envoyer template']);
        $permissionModifierTemplate = Permission::firstOrCreate(['name' => 'modifier template']);
        $permissionGenererPDF = Permission::firstOrCreate(['name' => 'générer pdf']);

        // Création des rôles
        $roleRedacteur = Role::firstOrCreate(['name' => 'rédacteur']);
        $roleAdmin = Role::firstOrCreate(['name' => 'admin']);
        $rolevieux = Role::firstOrCreate(['name' => 'viewer']);

        // Assignation des permissions aux rôles
        $this->assignPermissionsToRole($roleRedacteur, [
            $permissionModifierUtilisateur,
            $permissionSupprimerUtilisateur,
            $permissionCreationTemplate,
            $permissionEnvoyerTemplate,
            $permissionModifierTemplate,
            $permissionGenererPDF
        ]);

        $this->assignPermissionsToRole($roleAdmin, [
            $permissionSuppressionEmail,
            $permissionModifierUtilisateur,
            $permissionSupprimerUtilisateur,
            $permissionCreationTemplate,
            $permissionEnvoyerTemplate,
            $permissionModifierTemplate,
            $permissionGenererPDF
        ]);
    }

    /**
     * Assigner des permissions à un rôle s'ils ne sont pas déjà assignées.
     *
     * @param \App\Models\Role $role
     * @param array $permissions
     * @return void
     */
    private function assignPermissionsToRole(Role $role, array $permissions): void
    {
        foreach ($permissions as $permission) {
            if (!$role->hasPermissionTo($permission)) {
                $role->givePermissionTo($permission);
            }
        }
    }
}
