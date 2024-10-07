<?php

namespace App\Http\Controllers;
use DB;
use Str;
use App\Models\councellingrequest;
use App\Models\all_students_data;
use Illuminate\Support\Facades\Mail;
use App\Mail\CounselorRequest;
use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form1(){      
        $data = all_students_data::all(); // Replace YourModel with the actual model name

        return view('form-basic', compact('data'));
       }
       public function getClassIds(Request $request)
       {
        $program = $request->input('program');

        // Define a regular expression pattern to match 'M' followed by any characters
        $pattern = 'M%';
    
        // Perform a database query to retrieve 'Class_ID' values matching the pattern
        $classIds = DB::table('all_students_data')
            ->where('Class_ID', 'LIKE', $pattern)
            ->pluck('Class_ID');
            $data = all_students_data::all(); // Replace YourModel with the actual model name

            return view('form-basic', compact('data'));
       }
 
    public function requestform(Request $request)
    {
        // $patientid =$request->input('patientid') ;
        $program= $request->input('program');
        $class_name= $request->input('class_name');
        $class_id= $request->input('class_id');
        $name = $request->input('name');
        $dob = $request->input('dob');
        $gender = $request->input('gender');
        $phone = $request->input('phone');
        $Email = $request->input('Email');
        $reason = $request->input('reason');
        $counselor = $request->input('counselor');
        $history = $request->input('history');
        $comments= $request->input('comments');
        // $file = $request->input('file');

        $Crequest = new councellingrequest();
        $request_id= Str::random(5);
        $Crequest->request_id = $request_id;
        $Crequest->program= $program;
        $Crequest->Class_name = $class_name;
        $Crequest->class_id = $class_id;
        $Crequest->Name = $name;
        $Crequest->dob = $dob;
        $Crequest->gender= $gender;
        $Crequest->Phone = $phone;
        $Crequest->Email = $Email;
        $Crequest->reason = $reason;
        $Crequest->counselor = $counselor;
        $Crequest->history = $history;
        $Crequest->comments = $comments;
        $Crequest->nonappointed = false;

   
        if ($Crequest->save()) {
            echo '<h1>Insert Success</h1>';
        } else {
            echo "<h1>Failed</h1>";
        }
    // $counselorName = $request->input('counselor');
    // $counselorEmail = User::where('name', $counselorName)->value('email');

    // if (!$counselorEmail) {
    //     return redirect()->back()->with('error', 'Counselor email not found');
    // }

    // Mail::to($counselorEmail)->send(new CounselorRequest($request->all()));
    //     return redirect()->back()->with('success', 'Form Submitted  Successfully and email has been sent to the counselor');  
      
    }
    public function getUserDetails($id)
    {
        $user = DB::table('all_students_data')
        ->select(
            'all_students_data.Name',
            'all_students_data.Phone',
            'all_students_data.Email',
            'all_students_data.DOB',

            DB::raw("(SELECT description FROM programs WHERE program_id = CASE 
                WHEN all_students_data.Class_ID LIKE 'M-%' THEN 'M'
                WHEN all_students_data.Class_ID LIKE 'D-%' THEN 'D'
                WHEN all_students_data.Class_ID LIKE 'DPT%' THEN 'DPT'
                WHEN all_students_data.Class_ID LIKE 'MLT%' THEN 'MLT'
                WHEN all_students_data.Class_ID LIKE 'PRN%' THEN 'PRN'
                WHEN all_students_data.Class_ID LIKE 'BSN%' THEN 'BSN'
                ELSE ''
                END) as des"),
                DB::raw("(SELECT counselor_name FROM counselor WHERE program_id = CASE 
                WHEN all_students_data.Class_ID LIKE 'M-23%' THEN 'M-23'
                WHEN all_students_data.Class_ID LIKE 'M-22%' THEN 'M-22'
                WHEN all_students_data.Class_ID LIKE 'M-21%' THEN 'M-21'
                WHEN all_students_data.Class_ID LIKE 'M-20%' THEN 'M-20'
                WHEN all_students_data.Class_ID LIKE 'M-19%' THEN 'M-19'
                WHEN all_students_data.Class_ID LIKE 'M-18%' THEN 'M-18'
                WHEN all_students_data.Class_ID LIKE 'D-23%' THEN 'D-23'
                WHEN all_students_data.Class_ID LIKE 'D-22%' THEN 'D-22'
                WHEN all_students_data.Class_ID LIKE 'D-21%' THEN 'D-21'
                WHEN all_students_data.Class_ID LIKE 'D-20%' THEN 'D-20'
                WHEN all_students_data.Class_ID LIKE 'DPT-23%' THEN 'DPT-23'
                WHEN all_students_data.Class_ID LIKE 'DPT-22%' THEN 'DPT-22'
                WHEN all_students_data.Class_ID LIKE 'DPT-21%' THEN 'DPT-21'
                WHEN all_students_data.Class_ID LIKE 'DPT-20%' THEN 'DPT-20'
                WHEN all_students_data.Class_ID LIKE 'DPT-19%' THEN 'DPT-19'
                WHEN all_students_data.Class_ID LIKE 'MLT-23%' THEN 'MLT-23'
                WHEN all_students_data.Class_ID LIKE 'MLT-22%' THEN 'MLT-22'
                WHEN all_students_data.Class_ID LIKE 'MLT-21%' THEN 'MLT-21'
                WHEN all_students_data.Class_ID LIKE 'MLT-20%' THEN 'MLT-20'
                WHEN all_students_data.Class_ID LIKE 'MLT-19%' THEN 'MLT-19'
                WHEN all_students_data.Class_ID LIKE 'BSN-23%' THEN 'BSN-23'
                WHEN all_students_data.Class_ID LIKE 'BSN-22%' THEN 'BSN-22'
                WHEN all_students_data.Class_ID LIKE 'BSN-21%' THEN 'BSN-21'
                WHEN all_students_data.Class_ID LIKE 'BSN-20%' THEN 'BSN-20'
                WHEN all_students_data.Class_ID LIKE 'PRN-23%' THEN 'PRN-23'
                WHEN all_students_data.Class_ID LIKE 'PRN-2022%' THEN 'PRN-2022'
                WHEN all_students_data.Class_ID LIKE 'PRN-21%' THEN 'PRN-21'
                WHEN all_students_data.Class_ID LIKE 'PRN-20%' THEN 'PRN-20'
                ELSE ''
                END) as couns"),
                DB::raw("(SELECT year FROM counselor WHERE program_id = CASE 
                WHEN all_students_data.Class_ID LIKE 'M-23%' THEN 'M-23'
                WHEN all_students_data.Class_ID LIKE 'M-22%' THEN 'M-22'
                WHEN all_students_data.Class_ID LIKE 'M-21%' THEN 'M-21'
                WHEN all_students_data.Class_ID LIKE 'M-20%' THEN 'M-20'
                WHEN all_students_data.Class_ID LIKE 'M-19%' THEN 'M-19'
                WHEN all_students_data.Class_ID LIKE 'M-18%' THEN 'M-18'
                WHEN all_students_data.Class_ID LIKE 'D-23%' THEN 'D-23'
                WHEN all_students_data.Class_ID LIKE 'D-22%' THEN 'D-22'
                WHEN all_students_data.Class_ID LIKE 'D-21%' THEN 'D-21'
                WHEN all_students_data.Class_ID LIKE 'D-20%' THEN 'D-20'
                WHEN all_students_data.Class_ID LIKE 'DPT-23%' THEN 'DPT-23'
                WHEN all_students_data.Class_ID LIKE 'DPT-22%' THEN 'DPT-22'
                WHEN all_students_data.Class_ID LIKE 'DPT-21%' THEN 'DPT-21'
                WHEN all_students_data.Class_ID LIKE 'DPT-20%' THEN 'DPT-20'
                WHEN all_students_data.Class_ID LIKE 'DPT-19%' THEN 'DPT-19'
                WHEN all_students_data.Class_ID LIKE 'MLT-23%' THEN 'MLT-23'
                WHEN all_students_data.Class_ID LIKE 'MLT-22%' THEN 'MLT-22'
                WHEN all_students_data.Class_ID LIKE 'MLT-21%' THEN 'MLT-21'
                WHEN all_students_data.Class_ID LIKE 'MLT-20%' THEN 'MLT-20'
                WHEN all_students_data.Class_ID LIKE 'MLT-19%' THEN 'MLT-19'
                
                WHEN all_students_data.Class_ID LIKE 'BSN-23%' THEN 'BSN-23'
                WHEN all_students_data.Class_ID LIKE 'BSN-22%' THEN 'BSN-22'
                WHEN all_students_data.Class_ID LIKE 'BSN-21%' THEN 'BSN-21'
                WHEN all_students_data.Class_ID LIKE 'BSN-20%' THEN 'BSN-20'
                WHEN all_students_data.Class_ID LIKE 'PRN-23%' THEN 'PRN-23'
                WHEN all_students_data.Class_ID LIKE 'PRN-2022%' THEN 'PRN-2022'
                WHEN all_students_data.Class_ID LIKE 'PRN-21%' THEN 'PRN-21'
                WHEN all_students_data.Class_ID LIKE 'PRN-20%' THEN 'PRN-20'
                ELSE ''
                END) as year")
        )
        ->where('all_students_data.Class_ID', $id)
        ->first();
    
    return response()->json($user);
    
    }
    

    
}
