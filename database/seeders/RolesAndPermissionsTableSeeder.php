<?php

namespace Database\Seeders;

use App\Enums\RoleType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsTableSeeder extends Seeder
{
    protected $superadmin;
    protected $member;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $this->createRoles();

        Schema::enableForeignKeyConstraints();
    }

    private function createRoles()
    {
        Role::truncate();
        Permission::truncate();
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $this->superadmin = Role::create(['name' => RoleType::SUPERADMIN]);
        $this->member = Role::create(['name' => RoleType::MEMBER, 'guard_name' => 'student']);
    }
}
