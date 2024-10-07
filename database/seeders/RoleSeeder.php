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
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'hod']);
        $role = Role::create(['name' => 'mbbscoordinator']);
        $role = Role::create(['name' => 'mbbscounseller']);
        $role = Role::create(['name' => 'mbbs1']);
        $role = Role::create(['name' => 'mbbs2']);
        $role = Role::create(['name' => 'mbbs3']);
        $role = Role::create(['name' => 'mbbs4']);
        $role = Role::create(['name' => 'mbbs5']);
        $role = Role::create(['name' => 'bdscoordinator']);
        $role = Role::create(['name' => 'bdscounseller']);
        $role = Role::create(['name' => 'bds1']);
        $role = Role::create(['name' => 'bds2']);
        $role = Role::create(['name' => 'bds3']);
        $role = Role::create(['name' => 'bds4']);
        $role = Role::create(['name' => 'dptcounselor']);
        $role = Role::create(['name' => 'bsncounselor']);
        $role = Role::create(['name' => 'ahscoordinator']);
        $role = Role::create(['name' => 'psychologist']);
        $role = Role::create(['name' => 'psychiatrist']);
        $role = Role::create(['name' => 'exam']);
        $role = Role::create(['name' => 'studentafair']);
        $role = Role::create(['name' => 'user']);
    }
}
