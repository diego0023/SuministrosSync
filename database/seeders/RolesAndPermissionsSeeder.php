<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        // Misc
        $miscPermission = Permission::create(['name' => 'N/A']);

        // USER MODEL
        $userPermission1 = Permission::create(['name' => 'view_user']);
        $userPermission2 = Permission::create(['name' => 'view_any_user']);
        $userPermission3 = Permission::create(['name' => 'create_user']);
        $userPermission4 = Permission::create(['name' => 'update_user']);

        // ROLE MODEL
        $rolePermission1 = Permission::create(['name' => 'restore_user']);
        $rolePermission2 = Permission::create(['name' => 'restore_any_user']);
        $rolePermission3 = Permission::create(['name' => 'replicate_user']);
        $rolePermission4 = Permission::create(['name' => 'xd']);

        // PERMISSION MODEL
        $permission1 = Permission::create(['name' => 'delete_user']);
        $permission2 = Permission::create(['name' => 'delete_any_user']);
        $permission3 = Permission::create(['name' => 'force_delete_user']);
        $permission4 = Permission::create(['name' => 'force_delete_any_user']);

        // ADMINS
        $adminPermission1 = Permission::create(['name' => 'leer: admin']);
        $adminPermission2 = Permission::create(['name' => 'modificar: admin']);

        // CREATE ROLES
        $userRole = Role::create(['name' => 'user'])->syncPermissions([
            $miscPermission,
        ]);

        $superAdminRole = Role::create(['name' => 'super_admin'])->syncPermissions([
            $userPermission1,
            $userPermission2,
            $userPermission3,
            $userPermission4,
            $rolePermission1,
            $rolePermission2,
            $rolePermission3,
            $rolePermission4,
            $permission1,
            $permission2,
            $permission3,
            $permission4,
            $adminPermission1,
            $adminPermission2,
            $userPermission1,
        ]);
        $adminRole = Role::create(['name' => 'admin'])->syncPermissions([
            $userPermission1,
            $userPermission2,
            $userPermission3,
            $userPermission4,
            $rolePermission1,
            $rolePermission2,
            $rolePermission3,
            $rolePermission4,
            $permission1,
            $permission2,
            $permission3,
            $permission4,
            $adminPermission1,
            $adminPermission2,
            $userPermission1,
        ]);
        $moderatorRole = Role::create(['name' => 'moderador'])->syncPermissions([
            $userPermission2,
            $rolePermission2,
            $permission2,
            $adminPermission1,
        ]);
        $developerRole = Role::create(['name' => 'developer'])->syncPermissions([
            $adminPermission1,
        ]);

        // CREATE ADMINS & USERS
        User::create([
            'name' => 'super admin',
            'is_admin' => 1,
            'email' => 'super@super.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole($superAdminRole);



        User::create([
            'name' => 'moderator',
            'is_admin' => 1,
            'email' => 'moderator@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole($moderatorRole);

        User::create([
            'name' => 'developer',
            'is_admin' => 1,
            'email' => 'developer@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole($developerRole);

        for ($i = 1; $i < 50; $i++) {
            User::create([
                'name' => 'Test ' . $i,
                'is_admin' => 0,
                'email' => 'test' . $i . '@test.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                // password
                'remember_token' => Str::random(10),
            ])->assignRole($userRole);
        }
    }
}
