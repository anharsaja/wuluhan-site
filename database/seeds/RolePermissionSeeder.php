<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [

            [
                'group_name' => 'admin',
                'permissions' => [
                    // admin Permissions
                    'admin.create',
                    'admin.view',
                    'admin.edit',
                    'admin.delete',
                    'admin.approve',
                ]
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    // role Permissions
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.approve',
                ]
            ],
            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    'dashboard.edit',
                ]
            ],
            [
                'group_name' => 'sotk',
                'permissions' => [
                    // sotk Permissions
                    'sotk.create',
                    'sotk.view',
                    'sotk.edit',
                    'sotk.delete',
                    'sotk.approve',
                ]
            ],
            [
                'group_name' => 'osjj',
                'permissions' => [
                    // osjj Permissions
                    'osjj.view',
                    'osjj.edit',
                    'osjj.delete',
                    'osjj.update',
                ]
            ],
            [
                'group_name' => 'pkk',
                'permissions' => [
                    // pkk Permissions
                    'pkk.view',
                    'pkk.edit',
                    'pkk.delete',
                    'pkk.update',
                ]
            ],
            [
                'group_name' => 'ktb',
                'permissions' => [
                    // ktb Permissions
                    'ktb.view',
                    'ktb.edit',
                    'ktb.delete',
                    'ktb.update',
                ]
            ],
            [
                'group_name' => 'wisata',
                'permissions' => [
                    // wisata Permissions
                    'wisata.view',
                    'wisata.edit',
                    'wisata.delete',
                    'wisata.update',
                ]
            ],
            [
                'group_name' => 'budaya',
                'permissions' => [
                    // budaya Permissions
                    'budaya.view',
                    'budaya.edit',
                    'budaya.delete',
                    'budaya.update',
                ]
            ],
            [
                'group_name' => 'umkm',
                'permissions' => [
                    // umkm Permissions
                    'umkm.view',
                    'umkm.edit',
                    'umkm.delete',
                    'umkm.update',
                ]
            ],
        ];

        // Do same for the admin guard for tutorial purposes.
        $admin = Admin::where('username', 'superadmin')->first();
        $roleSuperAdmin = $this->maybeCreateSuperAdminRole($admin);

        // Create and Assign Permissions
        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                $permissionExist = Permission::where('name', $permissions[$i]['permissions'][$j])->first();
                if (is_null($permissionExist)) {
                    $permission = Permission::create(
                        [
                            'name' => $permissions[$i]['permissions'][$j],
                            'group_name' => $permissionGroup,
                            'guard_name' => 'admin'
                        ]
                    );
                    $roleSuperAdmin->givePermissionTo($permission);
                    $permission->assignRole($roleSuperAdmin);
                }
            }
        }

        // Assign super admin role permission to superadmin user
        if ($admin) {
            $admin->assignRole($roleSuperAdmin);
        }
    }

    private function maybeCreateSuperAdminRole($admin): Role
    {
        if (is_null($admin)) {
            $roleSuperAdmin = Role::create(['name' => 'superadmin', 'guard_name' => 'admin']);
        } else {
            $roleSuperAdmin = Role::where('name', 'superadmin')->where('guard_name', 'admin')->first();
        }

        if (is_null($roleSuperAdmin)) {
            $roleSuperAdmin = Role::create(['name' => 'superadmin', 'guard_name' => 'admin']);
        }

        return $roleSuperAdmin;
    }
}
