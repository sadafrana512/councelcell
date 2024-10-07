<?php
namespace App\Http\Controllers;
use App\Models\all_students_data;
use App\Models\Appointment;
use App\Models\councellingrequest;
use App\Models\Hod;
use App\Models\Coordinator;
use App\Models\Followup;
use App\Models\Pcho;
use App\Models\Pchia;
use App\Models\caseclose;
use App\Models\ReferCounselor;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentConfirmation;
use App\Mail\CounselorAppoint;

use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ScreenController extends Controller
{
    public function getCoordinatorForMDepartment()
  {
    // Fetch the coordinator for "M" department
    $coordinator = User::where('dep_id', 'M-')->first();

    if ($coordinator) {
        return $coordinator->name;
    }

    return ''; // Return an empty string if no coordinator is found
    
}
        public function getCoordinatorForDDepartment()
        {
        // Fetch the coordinator for "M" department
        $coordinatorD = User::where('dep_id', 'D-')->first();

        if  ($coordinatorD) {
            return $coordinatorD->name;
        }

        return ''; // Return an empty string if no coordinator is found
        
        }

public function screen()
{
    // Get all councelling requests and eager load the 'form1' relationship
    $data['emp'] = councellingRequest::with('councellingRequest')->get();
    $data['e'] = $data['emp']->first();
    // $data['followupAppointments'] = councellingRequest::pluck('followup_appointments')->toArray();
    // Get all appointed candidates
    $data['appointedCandidates'] = Appointment::all();
    // Get non-appointed candidates
    $nonAppointedCandidates = Appointment::where('appointed', false)->get();
    // Get appointed candidates
    $appointedCandidates = Appointment::where('appointed', true)->get(); 
    $casecloseCandidates = Appointment::where('caseclose', true)->get(); 
    $referals = Appointment::where('referals', false)->get(); 
    $referedCandidates = Hod::all(); 
    $bdsreferedCandidates = Coordinator::all(); 
    $mbbsreferedCandidates = Coordinator::all(); 
    $ahsreferedCandidates = Coordinator::all(); 
    $followupCandidates = Followup::all(); 
    $pchoCandidates = Pcho::all(); 
    $pchiaCandidates = Pchia::all(); 
    $pchoappointed = Appointment::where('pcho_appointed', true)->get(); 
    $Corappointed = Appointment::where('coordinator_appointment', true)->get(); 
    $ahsCorappointed = Coordinator::where('nonappointed', true)->get(); 
    $mbbsCorappointed = Coordinator::where('nonappointed', true)->get(); 
    $bdsCorappointed = Coordinator::where('nonappointed', true)->get(); 
    $referback = ReferCounselor::where('referback', true)->get(); 
    $Corfollow = Followup::where('corfollowup', true)->get(); 
    $pchiappointed = Appointment::where('pchi_appointed', true)->get(); 
    $pchiafollow = Followup::where('pchi_followup', true)->get(); 
    $pchofollow = Followup::where('pcho_followup', true)->get(); 
    $hodappointed = Hod::where('nonappointed', true)->get(); 
    $hodfollow = Followup::where('hod_followup', true)->get(); 

    // Add the non-appointed and appointed candidates to the data array
    $data['nonAppointedCandidates'] = $nonAppointedCandidates;
    $data['appointedCandidates'] = $appointedCandidates;
    $data['casecloseCandidates'] = $casecloseCandidates;
    $data['referedCandidates'] = $referedCandidates;
    $data['followupCandidates'] = $followupCandidates;
    $data['bdsreferedCandidates'] = $bdsreferedCandidates;
    $data['mbbsreferedCandidates'] = $mbbsreferedCandidates;
    $data['ahsreferedCandidates'] = $ahsreferedCandidates;
    $data['ahsCorappointed'] = $ahsCorappointed;
    $data['mbbsCorappointed'] = $mbbsCorappointed;
    $data['bdsCorappointed'] = $bdsCorappointed;
    $data['pchoCandidates'] = $pchoCandidates;
    $data['pchiaCandidates'] = $pchiaCandidates;
    $data['pchoappointed'] = $pchoappointed;
    $data['pchiappointed'] = $pchiappointed;
    $data['pchiafollow'] = $pchiafollow;
    $data['pchofollow'] = $pchofollow;
    $data['hodappointed'] = $hodappointed;
    $data['hodfollow'] = $hodfollow;
    $data['Corappointed'] = $Corappointed;
    $data['Corfollow'] = $Corfollow;
    $data['referals'] = $referals;
    $data['referback'] = $referback;

    // Call the method to get the coordinator's name
    $coordinatorName = $this->getCoordinatorForMDepartment();
    $coordinatorDName = $this->getCoordinatorForDDepartment();

    // Add the coordinator's name to the $data array
    $data['coordinatorName'] = $coordinatorName;
    $data['coordinatorDName'] = $coordinatorDName;
    $data['hodData'] = Hod::all();
    // Pass the updated $data array to the 'tables' view
    return view('tables', $data);
}  
    //    submittingappointmentformmmmm 
    public function appointment(Request $request)
{
    $date = $request->input('date');
    $time = $request->input('time');
    $comments = $request->input('comments');
    $class_id = $request->input('class_id');
    $datetimeString = "$date $time";
    $formattedTime = Carbon::parse($datetimeString)->format('Y-m-d h:i A');

    // Check if the record with the specified class_id exists in the pcho table
    $isFromPchoTable = Pcho::where('class_id', $class_id)->exists();

    $Crequest = new Appointment();
    $Crequest->date = $date;
    $Crequest->time = $formattedTime; // Store the time in AM/PM format
    $Crequest->comments = $comments;
    $Crequest->class_id = $class_id;
    $Crequest->name = $request->input('name');
    $Crequest->request_id = $request->input('request_id');
    $Crequest->counselor = $request->input('counselor');
    $Crequest->reason = $request->input('reason');
    $Crequest->appointed = true;
    $Crequest->nonappointed = false;

    if ($Crequest->save()) {
        echo '<h1>Insert Success</h1>';

        // If the data is from the pcho table, update pcho_appointed in the Appointment table
        if ($isFromPchoTable) {
            Appointment::where('class_id', $class_id)
                ->update(['pcho_appointed' => true]);

            // Also update nonappointed in the pcho table to 1
            $request_id = $request->input('request_id');
            Pcho::where('request_id', $request_id)
                ->update(['nonappointed' => 1]);
        }

        // If the data is from the pchia table, update pchia_appointed in the Appointment table
        $isFromPchiaTable = Pchia::where('class_id', $class_id)->exists();
        if ($isFromPchiaTable) {
            Appointment::where('class_id', $class_id)
                ->update(['pchi_appointed' => true]);

            // Also update nonappointed in the pchia table to 1
            $request_id = $request->input('request_id');
            Pchia::where('request_id', $request_id)
                ->update(['nonappointed' => 1]);
        }

        // hodtableupdate
        $isFromhodTable = Hod::where('class_id', $class_id)->exists();
        if ($isFromhodTable) {
            // Define $request_id before using it
            $request_id = $request->input('request_id');

            Appointment::where('class_id', $class_id)
                ->update(['hod_appointed' => true]);

            Hod::where('request_id', $request_id)
                ->update(['nonappointed' => 1]);
        }
        // if data is from coordinator table update coordinator table field and appointmnet table field 
        $isFromCorTable = Coordinator::where('class_id', $class_id)->exists();
        if ($isFromCorTable) {
            // Define $request_id before using it
            $request_id = $request->input('request_id');

            Appointment::where('class_id', $class_id)
                ->update(['coordinator_appointment' => true]);

                Coordinator::where('request_id', $request_id)
                ->update(['nonappointed' => 1]);
        }
        $isFromFTable = Followup::where('class_id', $class_id)->exists();
        if ($isFromFTable) {
            // Define $request_id before using it
            $request_id = $request->input('request_id');

            Appointment::where('class_id', $class_id)
                ->update(['followupappointed' => true]);

                Followup::where('request_id', $request_id)
                ->update(['followup' => 1]);
        }
        // REFERCOUNSELORTABLE
        $isFromRCTable = ReferCounselor::where('class_id', $class_id)->exists();
        if ($isFromRCTable) {
            // Define $request_id before using it
            $request_id = $request->input('request_id');

            ReferCounselor::where('class_id', $class_id)
                ->update(['referback' => false]);

        }
         // if data is from followup table update coordinator table field and appointmnet table field 
      
        // Update nonappointed in the Councellingrequest table to 1
        $request_id = $request->input('request_id');
        Councellingrequest::where('request_id', $request_id)
            ->update(['nonappointed' => 1]);
            // FORTESTINGIAMCOMMENTOUTINGTHIS
        // $class_id = $request->input('class_id');
        // $studentEmail = all_students_data::where('class_id', $class_id)->value('email');
        // Mail::to($studentEmail)->send(new AppointmentConfirmation($Crequest));
        // // counseloremail

        // $counselorName = $request->input('counselor');
        // $counselorEmail = User::where('name', $counselorName)->value('email');
        // Mail::to($counselorEmail)->send(new CounselorAppoint($request->all()));

        // Session::flash('success', 'Appointment Email has been sent successfully to the student and counselor!');

    } else {
        echo "<h1>Failed</h1>";
    }

    return back();
}

    public function reappointment(Request $request)
    {
        
        $date = $request->input('date');
        $time = $request->input('time');
        $comments = $request->input('comments');
        $datetimeString = "$date $time";
        $formattedTime = Carbon::parse($datetimeString)->format('Y-m-d h:i A');

        $Crequest = new Appointment();
        $Crequest->date = $date;
        $Crequest->time = $formattedTime;
        $Crequest->comments = $comments;
        $Crequest->class_id = $request->input('class_idre');
        $Crequest->name = $request->input('namere');
        $Crequest->request_id = $request->input('request_idre');
        $Crequest->counselor = $request->input('counselorre');
        $Crequest->reason = $request->input('reasonre');
        $Crequest->appointed = true;
      if ($Crequest->save()) {
        echo '<h1>Insert Success</h1>';
        
        $class_id = $request->input('class_idre');
        $studentEmail = all_students_data::where('class_id', $class_id)->value('email');
        $counselorEmail = User::where('name', $request->input('counselor'))->value('email');
        
        \Log::info('Student Email: ' . $studentEmail); // Add this line for logging
        \Log::info('Counselor Email: ' . $counselorEmail); // Add this line for logging
        
        if (!empty($studentEmail)) {
            // Send email to the student
            Mail::to($studentEmail)->send(new AppointmentConfirmation($Crequest));
            Session::flash('success', 'Appointment Email has been sent successfully to the student!');
        } else {
            \Log::error('Student Email is empty or not found.');
            Session::flash('error', 'Failed to send Appointment Email. Student email not found.');
        }

        if (!empty($counselorEmail)) {
            // Send email to the counselor
            Mail::to($counselorEmail)->send(new CounselorAppoint($request->all()));
            Session::flash('success', 'Appointment Email has been sent successfully to the counselor!');
        } else {
            \Log::error('Counselor Email is empty or not found.');
            Session::flash('error', 'Failed to send Appointment Email. Counselor email not found.');
        }
    } else {
        echo "<h1>Failed</h1>";
    }

    return back();
}
}