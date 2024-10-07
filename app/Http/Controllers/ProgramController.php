<?php

namespace App\Http\Controllers;
use DB;
use App\Models\mbbs;
use App\Models\bds;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function programs(){
        $mbbsSelection = DB::table('mbbs')->get();
        $bdsSelection = DB::table('bds')->get();

        return view('form-basic',compact(' $mbbsSelection',' $bdsSelection'));

    }
    public function processSelection(Request $request) {
        $mbbsSelection = $request->input('mbbs_class');
        $bdsSelection = $request->input('bds_class');
    
        // Now you can use $mbbsSelection and $bdsSelection as per your requirements
    
        // For example, you can return a view with the selected values
        return view('form-basic', compact('mbbsSelection', 'bdsSelection'));
    }
}