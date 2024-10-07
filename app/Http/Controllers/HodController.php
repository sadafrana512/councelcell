<?php

namespace App\Http\Controllers;
use App\Models\Hod;
use App\Models\Appointment;

use Illuminate\Http\Request;

class HodController extends Controller
{
    public function hod(Request $request)
    {
        // Get data from the form fields using the correct field names
        $class_idhod= $request->input('class_idhod');
        $namehod= $request->input('namehod');
        $request_idhod= $request->input('request_idhod');
        $counselorhod = $request->input('counselorhod');
        $reasonhod = $request->input('reasonhod');
        $hod = $request->input('hod');
        $message = $request->input('message');
    
        $Crequest = new Hod();
        $Crequest->class_id = $class_idhod;
        $Crequest->name = $namehod;
        $Crequest->request_id = $request_idhod;
        $Crequest->counselor = $counselorhod;
        $Crequest->reason= $reasonhod;
        $Crequest->hod= $hod;
        $Crequest->message = $message;
    
        if ($Crequest->save()) {
            echo '<h1>Insert Success</h1>';
            $request_id = $request->input('request_idhod');
            Hod::where('request_id', $request_id)->update(['refer' => 1]);
            Appointment::where('request_id', $request_id)->update(['referals' => 1]);

        } else {
            echo "<h1>Failed</h1>";
        }
        return back();
    }
    
}
