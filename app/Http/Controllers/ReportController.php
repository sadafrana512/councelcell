<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\councellingrequest;
use App\Models\Pcho;
use App\Models\Pchia;
use App\Models\Coordinator;
use App\Models\Followup;
use App\Models\Hod;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function getDataByRequestID()
    {
        $data = councellingrequest::with(['appointments', 'hod', 'pcho', 'pchia', 'caseclose'])->get();
        return view('reports', ['data' => $data]);
    }
    
    public function getStats(Request $request)
    {
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
    
        // Fetch data based on the selected date range
        $data = CouncellingRequest::with(['appointments', 'coordinator', 'hod', 'pcho', 'pchia', 'caseclose'])
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get();
                  
        $totalHodSessions = [];
        $coordinatorSessions = [];
        $psychologistSessions = [];
        $psychiatristSessions = [];
    
        foreach ($data as $record) {
            $studentName = $record->name;
    
            // Counting Appointments
            $record->requestCount = $record->appointments ? $record->appointments->count() : 0;
    
            // Counting HOD sessions for the specific student
            $hodSessions = $record->hod ? $record->hod->count() : 0;
            $totalHodSessions[$studentName] = isset($totalHodSessions[$studentName]) 
                ? $totalHodSessions[$studentName] + $hodSessions
                : $hodSessions;
    
            // Counting Coordinator sessions for the specific student
            $coordinatorSessions[$studentName] = $record->coordinator ? $record->coordinator->count() : 0;
    
            // Counting Psychologist sessions for the specific student
            $psychologistSessions[$studentName] = $record->pcho ? $record->pcho->count() : 0;
    
            // Counting Psychiatrist sessions for the specific student
            $psychiatristSessions[$studentName] = $record->pchia ? $record->pchia->count() : 0;
        }
    
        return view('stats', [
            'data' => $data,
            'totalHodSessions' => $totalHodSessions,
            'coordinatorSessions' => $coordinatorSessions,
            'psychologistSessions' => $psychologistSessions,
            'psychiatristSessions' => $psychiatristSessions,
        ]);
    }
    
    

    
    public function getStudentAppointments($class_id)
    {
        // Retrieve data from the Appointment table
        $studentAppointments = Appointment::where('class_id', $class_id)->get();
    
        // Retrieve data from the hod table
        $hodData = Hod::where('class_id', $class_id)->get();
    
        // Retrieve data from the coordinator table
        $coordinatorData = Coordinator::where('class_id', $class_id)->get();
        $PsychologistData = pcho::where('class_id', $class_id)->get();
        $PsychiatristData = pchia::where('class_id', $class_id)->get();
        $followup = Followup::where('class_id', $class_id)->get();

        // Pass all the data to the view
        return view('student-appointments', [
            'studentAppointments' => $studentAppointments,
            'hodData' => $hodData,
            'coordinatorData' => $coordinatorData,
            'PsychologistData' => $PsychologistData,
            'PsychiatristData' => $PsychiatristData ,
            'followup' => $followup ,

            'class_id' => $class_id,
        ]);
    }
}   