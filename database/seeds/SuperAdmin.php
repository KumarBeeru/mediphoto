<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => "Super Admin",
            'email' => "super@admin.com",
            'password' => Hash::make("P@ssword1"),
            'email_verified_at' => date("Y-m-d H:i:s")
        ]);
        $user->assignRole("super-admin");
    }
}
