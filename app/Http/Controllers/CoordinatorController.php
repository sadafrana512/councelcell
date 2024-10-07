<?php

namespace App\Http\Controllers;
use App\Models\Coordinator;
use App\Models\Appointment;
use App\Models\ReferCounselor;
use App\Models\councellingrequest;


use Illuminate\Http\Request;

class CoordinatorController extends Controller
{
    public function coordinator(Request $request)
    {
        $class_idcor= $request->input('class_idcor');
        $namecor= $request->input('namecor');
        $request_idcor = $request->input('request_idcor');
        $counselorcor = $request->input('counselorcor');
        $reasoncor = $request->input('reasoncor');
        $coordinator = $request->input('coordinator');
        $message = $request->input('message');
    
        $Crequest = new Coordinator();
        $Crequest->class_id = $class_idcor;
        $Crequest->name = $namecor;
        $Crequest->request_id = $request_idcor;
        $Crequest->counselor = $counselorcor;
        $Crequest->reason = $reasoncor;
        $Crequest->coordinator = $coordinator;
        $Crequest->message = $message;
    
        if ($Crequest->save()) {
            echo '<h1>Insert Success</h1>';
            $request_id = $request->input('request_idcor');
            Coordinator::where('request_id', $request_id)->update(['refer' => 1]);
            Appointment::where('request_id', $request_id)->update(['referals' => 1]);
        } else {
            echo "<h1>Failed</h1>";
        }
        return back();
    }

    public function counselor(Request $request)
    {
        $class_idcounselor= $request->input('class_idcounselor');
        $namecounselor= $request->input('namecounselor');
        $request_idcounselor = $request->input('request_idcounselor');
        // $counselorcounselor = $request->input('counselorcounselor');
        $reasoncounselor = $request->input('reasoncounselor');
        $counselorc = $request->input('counselorc');
        $message = $request->input('message');
    
        $Crequest = new ReferCounselor();
        $Crequest->class_id = $class_idcounselor;
        $Crequest->name = $namecounselor;
        $Crequest->request_id = $request_idcounselor;
        $Crequest->reason = $reasoncounselor;
        $Crequest->counselor = $counselorc;
        $Crequest->message = $message;
    
        if ($Crequest->save()) {
            echo '<h1>Insert Success</h1>';
            $request_id = $request->input('request_idcounselor');
            ReferCounselor::where('request_id', $request_id)->update(['referback' => 1]);
            councellingrequest::where('request_id', $request_id)->update(['referback' => 1]);
            Appointment::where('request_id', $request_id)->update(['referals' => 1]);

        } else {
            echo "<h1>Failed</h1>";
        }
        return back();
    }
    
}
