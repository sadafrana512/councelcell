<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CounselorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('counselor')->insert([
            ['program_id' => 'M-23', 'counselor_id' => 'imdc-1', 'counselor_name' => 'Dr Bilal Karim', 'year' => 'MBBS 2023'],
            ['program_id' => 'M-22', 'counselor_id' => 'imdc-2', 'counselor_name' => 'Dr Saima Latif', 'year' => 'MBBS 2022'],
            ['program_id' => 'M-21', 'counselor_id' => 'imdc-3', 'counselor_name' => 'Dr.Muhammad Arif', 'year' => 'MBBS 2021'],
            ['program_id' => 'M-20', 'counselor_id' => 'imdc-4', 'counselor_name' => 'Dr.shehla farhin', 'year' => 'MBBS 2020'],
            ['program_id' => 'M-19', 'counselor_id' => 'imdc-4', 'counselor_name' => 'Dr.Nousheen Hashsham', 'year' => 'MBBS 2019'],
            ['program_id' => 'D-23', 'counselor_id' => 'imdc-5', 'counselor_name' => 'Dr.Maham Niazi', 'year' => 'BDS 2023'],
            ['program_id' => 'D-22', 'counselor_id' => 'imdc-6', 'counselor_name' => 'M Sajid', 'year' => 'BDS 2022'],
            ['program_id' => 'D-21', 'counselor_id' => 'imdc-7', 'counselor_name' => 'Hina Mehmood', 'year' => 'BDS 2021'],
            ['program_id' => 'D-20', 'counselor_id' => 'imdc-8', 'counselor_name' => 'Tayyaba Saleem', 'year' => 'BDS 2020'],
            ['program_id' => 'DPT-23', 'counselor_id' => 'imdc-9', 'counselor_name' => 'Dr Hadiqa', 'year' => 'DPT 2023'],
            ['program_id' => 'DPT-22', 'counselor_id' => 'imdc-10', 'counselor_name' => 'Dr Hadiqa', 'year' => 'DPT 2022'],
            ['program_id' => 'DPT-21', 'counselor_id' => 'imdc-11', 'counselor_name' => 'Dr Hadiqa', 'year' => 'DPT 2021'],
            ['program_id' => 'DPT-20', 'counselor_id' => 'imdc-12', 'counselor_name' => 'Dr Hadiqa', 'year' => 'DPT 2020'],
            ['program_id' => 'DPT-19', 'counselor_id' => 'imdc-13', 'counselor_name' => 'Dr Hadiqa', 'year' => 'DPT 2019'],
            ['program_id' => 'MLT-23', 'counselor_id' => 'imdc-14', 'counselor_name' => 'Dr Hadiqa', 'year' => 'MLT 2023'],
            ['program_id' => 'MLT-22', 'counselor_id' => 'imdc-15', 'counselor_name' => 'Dr Hadiqa', 'year' => 'MLT 2022'],
            ['program_id' => 'MLT-21', 'counselor_id' => 'imdc-16', 'counselor_name' => 'Dr Hadiqa', 'year' => 'MLT 2021'],
            ['program_id' => 'MLT-20', 'counselor_id' => 'imdc-17', 'counselor_name' => 'Dr Hadiqa', 'year' => 'MLT 2020'],
            ['program_id' => 'BSN-23', 'counselor_id' => 'imdc-18', 'counselor_name' => 'Miss Rubina Nathaniel', 'year' => 'BSN 2023'],
            ['program_id' => 'BSN-22', 'counselor_id' => 'imdc-19', 'counselor_name' => 'Miss Rubina Nathaniel', 'year' => 'BSN 2022'],
            ['program_id' => 'BSN-21', 'counselor_id' => 'imdc-20', 'counselor_name' => 'Miss Rubina Nathaniel', 'year' => 'BSN 2021'],
            ['program_id' => 'BSN-20', 'counselor_id' => 'imdc-21', 'counselor_name' => 'Miss Rubina Nathaniel', 'year' => 'BSN 2020'],
            ['program_id' => 'PRN-23', 'counselor_id' => 'imdc-22', 'counselor_name' => 'Miss Rubina Nathaniel', 'year' => 'PRN 2023'],
            ['program_id' => 'PRN-22', 'counselor_id' => 'imdc-23', 'counselor_name' => 'Miss Rubina Nathaniel', 'year' => 'PRN 2022'],
            ['program_id' => 'PRN-21', 'counselor_id' => 'imdc-24', 'counselor_name' => 'Miss Rubina Nathaniel', 'year' => 'PRN 2021'],
            ['program_id' => 'PRN-20', 'counselor_id' => 'imdc-25', 'counselor_name' => 'Miss Rubina Nathaniel', 'year' => 'PRN 2020'],
            ['program_id' => 'M-18', 'counselor_id' => 'imdc-26', 'counselor_name' => 'Dr.Nousheen Hashsham', 'year' => 'MBBS 2018'],

        ]);
    }
}
