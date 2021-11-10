<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $manager = Role::create(['name' => 'manager']);
        $developer = Role::create(['name' => 'developer']);

        /*
          admin => todo
          manager => dashboard, listado, info de developer
          dev => index
         */

        Permission::create(['name' => 'dashboard'])->syncRoles([$admin,$manager,$developer]);//->assignRole($admin);
        Permission::create(['name' => 'users.index'])->syncRoles([$admin,$manager]);//->assignRole($admin);
        Permission::create(['name' => 'users.show'])->syncRoles([$admin,$manager]);//->assignRole($admin);
        Permission::create(['name' => 'users.create'])->syncRoles([$admin]);//->assignRole($admin);
        Permission::create(['name' => 'users.edit'])->syncRoles([$admin]);//->assignRole($admin);
        Permission::create(['name' => 'users.destroy'])->syncRoles([$admin]);//->assignRole($admin);

        //$admin->permissions()->attach([1,2,3,4...]);



    }
}
