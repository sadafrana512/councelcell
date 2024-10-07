<?php

namespace App\Http\Controllers;
use App\Models\Pchia;
use App\Models\Appointment;

use Illuminate\Http\Request;

class PchiaController extends Controller
{
    public function pchia(Request $request)
    {
        $class_idpchia= $request->input('class_idpchia');
        $namepchia= $request->input('namepchia');
        $request_idpchia= $request->input('request_idpchia');
        $counselorpchia = $request->input('counselorpchia');
        $reasonpchia = $request->input('reasonpchia');
        $psychiatrist = $request->input('psychiatrist');
        $message = $request->input('message');
    
        $Crequest = new Pchia();
        $Crequest->class_id = $class_idpchia;
        $Crequest->name = $namepchia;
        $Crequest->request_id = $request_idpchia;
        $Crequest->counselor = $counselorpchia;
        $Crequest->reason= $reasonpchia;
        $Crequest->psychiatrist= $psychiatrist;
        $Crequest->message = $message;
    
        if ($Crequest->save()) {
            echo '<h1>Insert Success</h1>';
            $request_id = $request->input('request_idpchia');

            Pchia::where('request_id', $request_id)->update(['refer' => 1]);
            Appointment::where('request_id', $request_id)->update(['referals' => 1]);
        } else {
            echo "<h1>Failed</h1>";
        }
        return back();
    }
}
