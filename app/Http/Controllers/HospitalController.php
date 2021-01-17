<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Field;
class HospitalController extends Controller
{
    public function index(){
    	$fields = Field::get();
    	$doctors = Doctor::get();
    	return view('hospital.home')->with(compact('fields','doctors'));
    }

    public function chooseRegister(){

    	return view('hospital.choose_register');
    }
}
