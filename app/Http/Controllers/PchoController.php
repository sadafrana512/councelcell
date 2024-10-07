<?php

namespace App\Http\Controllers;
use App\Models\Pcho;
use App\Models\Appointment;

use Illuminate\Http\Request;

class PchoController extends Controller
{
    public function pcho(Request $request)
    {
        $class_idpcho= $request->input('class_idpcho');
        $namepcho= $request->input('namepcho');    
        $request_idpcho= $request->input('request_idpcho');
        $counselorpcho = $request->input('counselorpcho');
        $reasonpcho = $request->input('reasonpcho');
        $psychologist = $request->input('psychologist');
        $message = $request->input('message');
    
        $Crequest = new Pcho();
        $Crequest->class_id = $class_idpcho;
        $Crequest->name = $namepcho;
        $Crequest->request_id = $request_idpcho;
        $Crequest->counselor = $counselorpcho;
        $Crequest->reason= $reasonpcho;
        $Crequest->psychologist= $psychologist;
        $Crequest->message = $message;
    
        if ($Crequest->save()) {
            echo '<h1>Insert Success</h1>';
            $request_id = $request->input('request_idpcho');
            Pcho::where('request_id', $request_id)->update(['refer' => 1]);
            Appointment::where('request_id', $request_id)->update(['referals' => 1]);
        } else {
            echo "<h1>Failed</h1>";
        }
        return back();
    }
}
