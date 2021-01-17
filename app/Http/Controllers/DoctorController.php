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
use App\Prescription;

class DoctorController extends Controller
{
    public function login(Request $request){
    	if($request->isMethod('post')){
    		$data  = $request->all();
    		
    		$docs = Doctor::get();
    		$docs = json_decode(json_encode($docs));

    		foreach ($docs as $doc) {
		    	if($doc->password == md5($data['password']) && $doc->email==$data['email'] && $doc->status == 1){
		    		// Session::put('doctorSession');
		    		// return redirect('/doctor/dashboard')->with('flash_message_success','Welcome Back User . ');
		    		Session::put('doctorSession',$data['password']);
		    		Session::put('session_id',$doc->id);
		    		return redirect('/doctor/dashboard')->with('flash_message_success','Welcome Back Doctor');

		    	}
    		}	
    	}
    	return view('admin.doctor.login');
    }

    public function register(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>";print_r($data);die;
    		$doc = new Doctor;
    		$doc->first_name = $data['first_name'];
    		$doc->last_name = $data['last_name'];
    		$doc->field = $data['field'];
    		$doc->qualification = $data['qualification'];
    		$doc->date_of_birth = $data['date_of_birth'];
    		$doc->university = $data['university'];
    		$doc->address = $data['address'];
    		$doc->office_hour = $data['office_hour'];
    		$doc->fee = $data['fee'];
    		$doc->achievement = $data['achievement'];
    		$doc->about = $data['about'];
    		$doc->email = $data['email'];
    		$doc->password = md5(($data['password']));
    		if($request->hasFile('image')){

                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    ///Resize Image For better use
                    $extention = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extention;
                    $large_image_path = 'images/backend_images/doctors_images/'.$filename;
                    
                    Image::make($image_tmp)->save($large_image_path);
                    
                    //store image name in product table

                    $doc->image = $filename;
                }
            }
    		$doc->status = 0;
    		$doc->save();

    		return redirect('/register-successful/thanks')->with('flash_message_success','Your Form has been submitted . Please Wait while the Admin Review it . Thank you.');
    	}
    	$fields = Field::get();
    	return view('hospital.doctor.register')->with(compact('fields'));
    }
    public function thankYou(){

    	return view('hospital.doctor.thankU');
    }

    public function doctor(){
    	
    	$id = Session::get('session_id');
    	
    	$doc = Doctor::where(['id'=>$id])->first();
    	//echo "<pre>";print($doc);die;
    	return view('admin.dashboard')->with(compact('doc'));
    }
    public function logout(){
    	Auth::logout();
        Session::forget('doctorSession');
        Session::forget('session_id');
    	return redirect('/admin/doctor')->with('flash_message_success','You have been logged out successfully .');
    }

    public function editProfile(Request $request,$id = null){

        if($request->isMethod('post')){
            $data = $request->all();
            if($request->hasFile('image')){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    ///Resize Image For better use
                    $extention = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extention;
                    $large_image_path = 'images/backend_images/doctors_images/'.$filename;
                   
                    Image::make($image_tmp)->save($large_image_path);
                    
                    //store image name in product table

                }
            }else{
                $filename = $data['current_image'];
            }
            if(empty($data['password'])){
                $pass = $data['old_pass'];
            }else{
                $pass = $data['password'];
            }
            $status = $data['status'];

            Doctor::where(['id'=>$id])->update(['first_name'=>$data['first_name'],'last_name'=>$data['last_name'],'email'=>$data['email'],'password'=>$pass,'qualification'=>$data['qualification'],'achievement'=>$data['achievement'],'address'=>$data['address'],'university'=>$data['university'],'date_of_birth'=>$data['date_of_birth'],'fee'=>$data['fee'],'office_hour'=>$data['office_hour'],'about'=>$data['about'],'image'=>$filename,'status'=>$status]);

            return redirect()->back()->with('flash_message_success','Profile Has Been Updated Successfully');
        }

        $id = Session::get('session_id');
        $doc = Doctor::where(['id'=>$id])->first();
        $field = Field::get();
        return view('admin.doctor.edit_profile')->with(compact('doc','field'));
    }

    public function appoinments(){


        $id = Session::get('session_id');
        
        $doc = Doctor::where(['id'=>$id])->first();
        $appoinments = DB::table('doctor_patient')->where('doctor_id',$id)->get();
        //echo "<pre>";print_r($appoinments);die;
        return view('admin.doctor.appoinment')->with(compact('doc','appoinments'));
    }

    public function deleteAppoinment($id = null){

        
        DB::table('doctor_patient')->where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Appoinment has been deleted successfully.');
    }

    public function makePrescription(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            if(empty($data['description'])){
                $des = '';
            }else{
                $des = $data['description'];
            }
            //echo "<pre>";print_r($data);die;
            foreach ($data['medicine'] as $key => $val) {
                if(!empty($val)){
                    $prescription = new Prescription;
                    $prescription->doctor_id = $data['doctor_id'];
                    $prescription->patient_name = $data['patient_name'];
                    $prescription->disease_name = $data['disease_name'];
                    $prescription->medicine_name = $val;
                    $prescription->quantity = $data['quantity'][$key];
                    $prescription->morning = $data['morning'][$key];
                    $prescription->mid_day = $data['mid_day'][$key];
                    $prescription->night = $data['night'][$key];
                    $prescription->issue_date = $data['issue_date'];
                    $prescription->expire_date = $data['expire_date'];
                    $prescription->patient_mobile = $data['patient_mobile'];
                    $prescription->fee = $data['fee'];
                    $prescription->description = $des;
                    $prescription->save();


                }
            }

            return redirect('/doctor/view/prescription')->with('flash_message_success','Patients prescription has been added successfully');
        }

        $id = Session::get('session_id');
        
        $doc = Doctor::where(['id'=>$id])->first();
        return view('admin.doctor.add_prescription')->with(compact('doc'));
    }

    public function viewPrescription(){

        //$pres =  DB::table("prescriptions")->select(DB::raw("COUNT(patient_mobile) count"))->groupBy("patient_mobile")->havingRaw("COUNT(patient_mobile) >= 1")->get();
        $pres = Prescription::get();

        //echo "<pre>";print_r($pres);die;

        $id = Session::get('session_id');
        $doc = Doctor::where(['id'=>$id])->first();
        return view('admin.doctor.view_prescription')->with(compact('doc','pres'));
    }

    public function deletePres($id = null){
        Prescription::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Prescription has been deleted successfully');
    }

    public function printPrescription($id = null){

        $data = DB::table('prescriptions')->where('id',$id)->get();
        $patient = Prescription::where(['id'=>$id])->first();
        foreach ($data as $key) {
            $pres[] = $key->patient_mobile;
        }
        $prescribe = Prescription::whereIn('patient_mobile',$pres)->get();
       
        //echo "<pre>";print_r($prescribe);die;

        $id = Session::get('session_id');
        
        $doc = Doctor::where(['id'=>$id])->first();
        return view('admin.doctor.print_pres')->with(compact('doc','prescribe','patient'));
    }
}
