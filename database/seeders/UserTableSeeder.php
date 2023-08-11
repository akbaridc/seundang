<?php

namespace Database\Seeders;

use App\Enums\RoleType;
use App\Models\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();

        $superadmin = User::create([
            'name' => RoleType::SUPERADMIN,
            'email' => 'superadmin@seundang.com',
            'password' => Hash::make('password'),
            'created_by' => 1
        ]);
        $superadmin->assignRole(RoleType::SUPERADMIN);

        Schema::enableForeignKeyConstraints();
    }
}
