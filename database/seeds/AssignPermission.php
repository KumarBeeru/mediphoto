<?php

namespace Database\Seeders;

use App\Helpers\Constants;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class AssignPermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert of update all roles
        foreach (Constants::$ROLE_PERMISSION as $value) {

            $role = Role::whereName($value["role"])->first();
            $permissions = Permission::whereIn("name", $value["permission"])->get();
            $role->givePermissionTo($permissions);
        }
    }
}
