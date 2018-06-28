<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Credentials;

class CredentialsController extends Controller
{
    public function Login($Email,$Pass){
        $User=Credentials::all()->where("Email",$Email)->where("Password",$Pass);
        return $User->toArray();
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
}
