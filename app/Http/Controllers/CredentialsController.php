<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Credentials;

class CredentialsController extends Controller
{
    public function Login($Email,$Pass){
        $User=Credentials::all()->where("Email",$Email)->where("Password",$Pass);
        foreach($User as $Fetched){
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
        
        if($Results == null){
            return "Empty";
        }else{
        return json_encode(['User'=>$Results]);   
        }
        }
    }
    public function Register(){
        $Register=new Credentials();
        $Register->Email=request('Email');
        $Register->Password=request('Password');
        $Register->Gender=request('Gender');
        $Register->Weight=request('Weight');
        $Register->BMI=request('BMI');
        $Register->GymName=request('GymName');
        $Register->Latitude=request('Latitude');
        $Register->Longitude=request('Longitude');
        $Register->ImageURL=request('ImageURL');
        $Register->save();
    }
    
    public function UpdateProfile($Email){
        $Update=new Credentials::all()->find($Email);
        $Update->Password=request('Password');
        $Update->Gender=request('Gender');
        $Update->Weight=request('Weight');
        $Update->BMI=request('BMI');
        $Update->GymName=request('GymName');
        $Update->Latitude=request('Latitude');
        $Update->Longitude=request('Longitude');
        $Update->save();
    }
        
}
