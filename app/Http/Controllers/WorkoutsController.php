<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workouts;

class WorkoutsController extends Controller
{
    public function FetchWorkouts($Email){
        $User=Workouts::all()->where("Email",$Email);
        foreach($User as $Fetched){
        for($i=0; $i<10;$i++){
        $Fetch[$i]=[
        $Results[0]=$Fetched->Email;
        $Results[1]=$Fetched->Password;
        $Results[2]=$Fetched->Gender;
        $Results[3]=$Fetched->Weight;
        $Results[4]=$Fetched->BMI;
        $Results[5]=$Fetched->GymName;
        $Results[6]=$Fetched->Latitude;
        $Results[7]=$Fetched->Longitude;
        $Results[8]=$Fetched->ImageURL;
        $Results[9]=$Fetched->id;
        ]
        }
        }
        return json_encode(['Workouts'=>$Fetch]);
     
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
