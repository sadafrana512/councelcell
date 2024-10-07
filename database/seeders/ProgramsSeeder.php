<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programs')->insert([
            ['program_id' => 'M', 'description' => 'MBBS'],
            ['program_id' => 'D', 'description' => 'BDS'],
            ['program_id' => 'MLT', 'description' => 'MLT'],
            ['program_id' => 'DPT', 'description' => 'DPT'],
            ['program_id' => 'PRN', 'description' => 'PRN'],
            ['program_id' => 'BSN', 'description' => 'BSN'],
        ]);
    }
}
