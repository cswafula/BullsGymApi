<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructors;

class InstructorsController extends Controller
{
    public function Fetch(){
        $User=Instructors::all();
        return json_encode(['Instructors'=>$User]);
    }
}
