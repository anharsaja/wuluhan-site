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
                'group_name' => 'sekretariat',
                'permissions' => [
                    // sekretariat Permissions
                    'sekretariat.create',
                    'sekretariat.view',
                    'sekretariat.edit',
                    'sekretariat.delete',
                ]
            ],
            [
                'group_name' => 'pemerintahan',
                'permissions' => [
                    // pemerintahan Permissions
                    'pemerintahan.create',
                    'pemerintahan.view',
                    'pemerintahan.edit',
                    'pemerintahan.delete',
                ]
            ],
            [
                'group_name' => 'pelum',
                'permissions' => [
                    // pelum Permissions
                    'pelum.create',
                    'pelum.view',
                    'pelum.edit',
                    'pelum.delete',
                ]
            ],
            [
                'group_name' => 'pmks',
                'permissions' => [
                    // pmks Permissions
                    'pmks.create',
                    'pmks.view',
                    'pmks.edit',
                    'pmks.delete',
                ]
            ],
            [
                'group_name' => 'trantib',
                'permissions' => [
                    // trantib Permissions
                    'trantib.create',
                    'trantib.view',
                    'trantib.edit',
                    'trantib.delete',
                ]
            ]
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
