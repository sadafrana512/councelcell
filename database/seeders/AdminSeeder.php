<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // hoduserr
        $users = User::create([
            'name' => 'Dr Saffia Shaukat',
            'email' => 'Saffia.shaukat@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'dep_id' => 'M',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $users->assignRole('hod'); 
        // adminuserr
        $users = User::create([
         'name' => 'Sadaf Rana',
         'email' => 'sadaf.rana@imdcollege.edu.pk',
         'email_verified_at' => now(),
         'dep_id' => '',
         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
     ]);
     $users->assignRole('admin'); 
     
          $users = User::create([
        'name' => 'Dr Iram iqbal',
        'email' => 'iram.iqbal@imdcollege.edu.pk',
        'email_verified_at' => now(),
        'dep_id' => 'M-',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
     ]);
    $users->assignRole('mbbscoordinator');  
    // mbbs1counselor
    $users = User::create([
        'name' => 'Dr Bilal Karim',
        'email' => 'bilal.karim@imdcollege.edu.pk',
        'email_verified_at' => now(),
        'dep_id' => 'M-23',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
     ]);
    $users->assignRole('mbbs1');  
    // mbbs2counselor
    $users = User::create([
        'name' => 'Dr.Saima Latif',
        'email' => 'saima@iideas.edu.pk',
        'email_verified_at' => now(),
        'dep_id' => 'M-22',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
     ]);
    $users->assignRole('mbbs2');  
      // mbbs3counselor
      $users = User::create([
        'name' => 'Dr.Muhammad Arif',
        'email' => 'muhammad.arif@imdcollege.edu.pk',
        'email_verified_at' => now(),
        'dep_id' => 'M-21',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
     ]);
    $users->assignRole('mbbs3');  
       // mbbs4counselor
        $users = User::create([
            'name' => 'Dr.shehla farhin',
            'email' => 'shehla.farhin@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'dep_id' => 'M-20',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $users->assignRole('mbbs4');  
        // mbbs4counselor
        $users = User::create([
        'name' => 'Dr.Nousheen Hashsham',
        'email' => 'nausheen.hashsham@imdcollege.edu.pk',
        'email_verified_at' => now(),
        'dep_id' => 'M-19',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $users->assignRole('mbbs5');  
        $users = User::create([
         'name' => 'Dr.Nousheen Hashsham',
         'email' => 'nausheen.hashsham@imdcollege.edu.pk',
         'email_verified_at' => now(),
         'dep_id' => 'M-18',
         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
         ]);
         $users->assignRole('mbbs5');  
      // bds1counselor
      $users = User::create([
         'name' => 'Dr.Maham Niazi',
         'email' => 'maham.niazi@iideas.edu.pk',
         'email_verified_at' => now(),
         'dep_id' => 'D-23',
         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
         ]);
         $users->assignRole('bds1');  
         // bds2counselor
      $users = User::create([
         'name' => 'M Sajid',
         'email' => 'm.sajid@iideas.edu.pk',
         'email_verified_at' => now(),
         'dep_id' => 'D-22',
         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
         ]);
         $users->assignRole('bds2');  
      // bds3counselor
      $users = User::create([
         'name' => 'Hina Mehmood',
         'email' => 'hina.mahmood@iideas.edu.pk',
         'email_verified_at' => now(),
         'dep_id' => 'D-21',
         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
         ]);
         $users->assignRole('bds3');  
      // bds4counselor
      $users = User::create([
         'name' => 'Tayyaba Saleem',
         'email' => 'tayyaba.saleem@iideas.edu.pk',
         'email_verified_at' => now(),
         'dep_id' => 'D-20',
         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
         ]);
         $users->assignRole('bds4');  
      // bdscoordinator
      $users = User::create([
         'name' => 'Dr.Saima Azam',
         'email' => 'saima.azam@iideas.edu.pk',
         'email_verified_at' => now(),
         'dep_id' => 'D-',
         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
         ]);
         $users->assignRole('bdscoordinator');  
        // dptcounselor
        $users = User::create([
         'name' => 'Dr.Hadiqa',
         'email' => 'hadiqa.adnan@imdcollege.edu.pk',
         'email_verified_at' => now(),
         'dep_id' => 'DPT-',
         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
         ]);
         $users->assignRole('dptcounselor');  
     // inccounselor
     $users = User::create([
      'name' => 'Miss Rubina Nathaniel',
      'email' => 'rubina.nathaniel@incollege.edu.pk',
      'email_verified_at' => now(),
      'dep_id' => 'BSN-',
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      ]);
      $users->assignRole('bsncounselor');  
    
      
      // ahscoordinator
      $users = User::create([
         'name' => 'Dr. Sadaf Jafar',
         'email' => 'sadaf.jafar@imdcollege.edu.pk',
         'email_verified_at' => now(),
         'dep_id' => '-',
         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
         ]);
         $users->assignRole('ahscoordinator');  
         // DPT-,MLT-,PRN-,BSN-

       // psychologist
            $users = User::create([
               'name' => 'Miss Azmat Shaheen',
               'email' => 'azmat.shaheen@imdcollege.edu.pk',
               'email_verified_at' => now(),
               'dep_id' => '',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
               ]);
               $users->assignRole('psychologist');  
               // psychiatrist
             $users = User::create([
            'name' => 'Dr. Benish',
             'email' => 'beenish.gul@imdcollege.edu.pk',
              'email_verified_at' => now(),
               'dep_id' => '',
              'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
               ]);
               $users->assignRole('psychiatrist');  
            // exam
            $users = User::create([
            'name' => 'Sabir Tabassum',
            'email' => 'sabir.tabassum@imdcollege.edu.pk',
            'email_verified_at' => now(),
            'dep_id' => '',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            ]);
             $users->assignRole('exam');  
              // studentaffair
            $users = User::create([
               'name' => 'Dr. Umar',
               'email' => 'umar@imdcollege.edu.pk',
               'email_verified_at' => now(),
               'dep_id' => '',
               'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
               ]);
                $users->assignRole('studentafair');
                $users = User::create([
                  'name' => 'Raazia Shaheen',
                  'email' => 'raazia.shaheen@imdcollege.edu.pk',
                  'email_verified_at' => now(),
                  'dep_id' => '',
                  'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                  ]);
                   $users->assignRole('studentafair');
  }

}