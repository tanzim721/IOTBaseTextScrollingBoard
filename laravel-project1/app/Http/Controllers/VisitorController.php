<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;

class VisitorController extends Controller
{
    
    public function VisitorIndex(){
        $VisitorData['allData'] = VisitorModel::orderBy('id', 'desc')->take(20)->get();
        return view('Visitor', $VisitorData);
    }
}
