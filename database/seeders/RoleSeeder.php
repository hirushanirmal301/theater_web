<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolesToSeed = [
            ['name' => 'superadmin', 'guard_name' => 'web'],
            ['name' => 'admin', 'guard_name' => 'web'],
            ['name' => 'user', 'guard_name' => 'web'],
        ];

        foreach ($rolesToSeed as $roleData) {
            $existingRole = Role::where('name', $roleData['name'])
                ->where('guard_name', $roleData['guard_name'])
                ->first();

            if (!$existingRole) {
                Role::create($roleData);
                $this->command->info("Role '{$roleData['name']}' created successfully.");
            } else {
                $this->command->info("Role '{$roleData['name']}' already exists. Skipping role creation.");
            }
        }
    }
}
