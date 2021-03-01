<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Helpers\Constants;
use App\Models\Role As RoleModel;
class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Insert of update all roles
        foreach (Constants::$ROLE_LIST as $value){

            if(!RoleModel::whereName($value)->exists()) {

                RoleModel::create(['name' => $value]);
            }
        }
    }
}
