<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workouts;

class WorkoutsController extends Controller
{
    public function FetchWorkouts($Email){
        $User=Workouts::all()->where("Email",$Email);
        
        foreach($User as $person){
            $users[]->$person->id = $person->Email;
        }
        return json_encode(['Workouts'=>$User]);
     
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
