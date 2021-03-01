<?php

namespace Database\Seeders;

use App\Helpers\Constants;
use App\Models\Permission as PermissionModel;
use Illuminate\Database\Seeder;

class Permission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Insert of update all roles
        foreach (Constants::$PERMISSION_LIST as $value){

            if(!PermissionModel::whereName($value)->exists()) {

                PermissionModel::create(['name' => $value]);
            }
        }
    }
}
