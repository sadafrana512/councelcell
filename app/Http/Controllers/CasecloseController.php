<?php

namespace App\Http\Controllers;
use App\Models\Caseclose;
use App\Models\Followup;
use App\Models\Appointment;
use App\Models\Coordinator;
use App\Models\Pcho;
use App\Models\Pchia;
use App\Models\Hod;

use Illuminate\Http\Request;

class CasecloseController extends Controller
{
    public function close(Request $request)
    {
        // Get data from the form fields using the correct field names
        $class_idclose = $request->input('class_idclose');
        $nameclose = $request->input('nameclose');
        $request_idclose = $request->input('request_idclose');
        $counselorclose = $request->input('counselorclose');
        $reasonclose = $request->input('reasonclose');
        $message = $request->input('message');
    
        $Crequest = new Caseclose();
        $Crequest->class_id = $class_idclose;
        $Crequest->name = $nameclose;
        $Crequest->request_id = $request_idclose;
        $Crequest->counselor = $counselorclose;
        $Crequest->reason = $reasonclose;
        $Crequest->message = $message;
        $Crequest->caseclose = true;
    
        if ($Crequest->save()) {
            echo '<h1>Insert Success</h1>';
             $request_id = $request->input('request_idclose');
             Appointment::where('request_id', $request_id)->update(['referals' => 1]);
            } else {
            echo "<h1>Failed</h1>";
        }
        return back();
    }
    
 
    public function followup(Request $request)
    {
        // Get data from the form fields using the correct field names
        $class_idfollow= $request->input('class_idfollow');
        $namefollow= $request->input('namefollow');
        $request_idfollow= $request->input('request_idfollow');
        $counselorfollow = $request->input('counselorfollow');
        $reasonfollow = $request->input('reasonfollow');
        $message = $request->input('message');
    // Check if the record with the specified class_id exists in the pcho table
        $isFromPchoTable = Pcho::where('class_id', $class_idfollow)->exists();
        $isFromPchiaTable = Pchia::where('class_id', $class_idfollow)->exists();
        $isFromhodTable = Hod::where('class_id', $class_idfollow)->exists();

        $Crequest = new Followup();
        $Crequest->class_id = $class_idfollow;
        $Crequest->name = $namefollow;
        $Crequest->request_id = $request_idfollow;
        $Crequest->counselor = $counselorfollow;
        $Crequest->reason= $reasonfollow;
        $Crequest->message = $message;
        
    
        if ($Crequest->save()) {
            echo '<h1>Insert Success</h1>';
            $request_id = $request->input('request_idfollow');

            Appointment::where('request_id', $request_id)->update(['referals' => 1]);
            // If the data is from the pcho table, update pcho_appointed in the Appointment table
            if ($isFromPchoTable) {
                Followup::where('class_id', $class_idfollow)
                    ->update(['pcho_followup' => true]);
         
                // Also update nonappointed in the pcho table to 1
                Pcho::where('class_id', $class_idfollow)
                    ->update(['folloup' => true]);
            }
            if ($isFromPchiaTable) {
                Followup::where('class_id', $class_idfollow)
                    ->update(['pchi_followup' => true]);
        
                // Also update nonappointed in the pcho table to 1
                Pchia::where('class_id', $class_idfollow)
                    ->update(['folloup' => true]);
            }
            if ($isFromhodTable) {
                Followup::where('class_id', $class_idfollow)
                    ->update(['hod_followup' => true]);
        
                // Also update nonappointed in the pcho table to 1
                Hod::where('class_id', $class_idfollow)
                    ->update(['followup' => true]);
            }
            $isFromCorTable = Coordinator::where('class_id', $class_idfollow)->exists();
        if ($isFromCorTable) {
            // Define $request_id before using it
            $request_id = $request->input('request_id');

            Followup::where('class_id', $class_idfollow)
                ->update(['corfollowup' => true]);

                Coordinator::where('request_id', $request_id)
                ->update(['corfollowup' => 1]);
        }
   
            
        } else {
            echo "<h1>Failed</h1>";
        }
        return back();
    }
}
