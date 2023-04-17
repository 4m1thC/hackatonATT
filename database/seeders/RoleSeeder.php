<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleControl = Role::create(['name' => 'Control']);
        $roleExpositor = Role::create(['name' => 'Expositor']);

        //permisos admin
        Permission::create(['name' => 'admin.rol.crear'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.rol.editar'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.rol.update'])->assignRole($roleAdmin);

        Permission::create(['name' => 'eventos.crear'])->assignRole($roleAdmin);
        Permission::create(['name' => 'eventos.editar'])->assignRole($roleAdmin);
        Permission::create(['name' => 'eventos.borrar'])->assignRole($roleAdmin);

        Permission::create(['name' => 'ambientes.index'])->assignRole($roleAdmin);
        Permission::create(['name' => 'ambientes.crear'])->assignRole($roleAdmin);
        Permission::create(['name' => 'ambientes.editar'])->assignRole($roleAdmin);
        Permission::create(['name' => 'ambientes.borrar'])->assignRole($roleAdmin);

        //permisos control
        Permission::create(['name' => 'charlas.index'])->assignRole($roleControl);
        Permission::create(['name' => 'charlas.crear'])->assignRole($roleControl);
        Permission::create(['name' => 'charlas.editar'])->assignRole($roleControl);
        Permission::create(['name' => 'charlas.borrar'])->assignRole($roleControl);

        Permission::create(['name' => 'expositores.index'])->assignRole($roleControl);
        Permission::create(['name' => 'expositores.crear'])->assignRole($roleControl);
        Permission::create(['name' => 'expositores.editar'])->assignRole($roleControl);
        Permission::create(['name' => 'expositores.borrar'])->assignRole($roleControl);

        Permission::create(['name' => 'certificados.index'])->assignRole($roleControl);
        Permission::create(['name' => 'certificados.crear'])->assignRole($roleControl);
        Permission::create(['name' => 'certificados.editar'])->assignRole($roleControl);
        Permission::create(['name' => 'certificados.borrar'])->assignRole($roleControl);

        Permission::create(['name' => 'inscripciones.index'])->assignRole($roleControl);
        Permission::create(['name' => 'inscripciones.crear'])->assignRole($roleControl);
        Permission::create(['name' => 'inscripciones.editar'])->assignRole($roleControl);
        Permission::create(['name' => 'inscripciones.borrar'])->assignRole($roleControl);

        //permisos expositor
        Permission::create(['name' => 'materiales.index'])->assignRole($roleExpositor);
        Permission::create(['name' => 'materiales.crear'])->assignRole($roleExpositor);
        Permission::create(['name' => 'materiales.editar'])->assignRole($roleExpositor);
        Permission::create(['name' => 'materiales.borrar'])->assignRole($roleExpositor);
    }
}
