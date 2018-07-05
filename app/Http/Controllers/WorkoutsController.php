<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workouts;

class WorkoutsController extends Controller
{
    public function FetchWorkouts($Email){
    $User=Workouts::all()->where("Email",$Email);
     foreach($User as $Fetched){
        $Results[0]=$Fetched->Email;
        $Results[1]=$Fetched->WorkoutName;
        $Results[2]=$Fetched->Description;
        $Results[3]=$Fetched->Reps;
        $Results[4]=$Fetched->Date;   
        }
    return json_encode(['Workouts'=>$Results]);
    }
    
    public function InsertWorkout(){ 
        $Workout=new Workouts();
        $Workout->Email=request('Email');
        $Workout->WorkoutName=request('WorkoutName');
        $Workout->Description=request('Description');
        $Workout->Reps=request('Reps');
        $Workout->Date=request('Date');
        $Workout->save();
    }
}
