<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use App\Field;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Image;
use App\Tag;
use DB;
use App\Doctor;
use Auth;
use App\Patient;

class PatientController extends Controller
{
    public function reserveAppoinment(Request $request){

    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>";print_r($data);die;
    		$patient = new Patient;
    		$patient->name = $data['name'];
    		$patient->email = $data['email'];
    		$patient->password = md5($data['email']);
    		$patient->address = $data['address'];
    		$patient->mobile = $data['mobile'];
    		
    		$patient->field = $data['field'];
    		$patient->date = $data['date'];

    		$patient->save();
            if(isset($request->doctor)){
              $patient->doctors()->sync($request->doctor,false);
            }else{
                $patient->doctors()->sync(array());
            }
    		return redirect('/appoinment/thanks')->with('flash_message_success','Please Wait For SMS confirmation of Your Appoinment . Godspeed . ');

    	}
    }

    public function thanks(){

    	return view('hospital.patient.thanks');
    }
}
