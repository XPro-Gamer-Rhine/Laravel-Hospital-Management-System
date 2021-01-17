<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\User;
use App\Tag;
use App\Field;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Image;
use App\Doctor;


class AdminController extends Controller
{
    //
    public function dashboard(){

    	return view('Authority.dashboard');
    }

    public function login(Request $request){

		if($request->isMethod('post')){
			$data  = $request->input();
			if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>1])){
				return redirect('/dashboard')->with('flash_message_success','You are logged in as Admin');
			}else{
				return redirect('/authority/admin')->with('flash_message_error','Invalid Email Or Password . ');
			}
		}

		return view('Authority.admin.login');
	}

	public function logout(){
		Session::flush();
		return redirect('/authority/admin')->with('flash_message_success','Logged Out Successfully . ');
	}

	// public function user_settings(){
		
	// 	return view('Admin.user_account');
	
	// }
	// public function password_settings(){
		
	// 	return view('Admin.settings');
	
	// }
	
	// public function chkPassword(Request $request){
	// 	$data = $request->all();
	// 	$current_password = $data['current_pwd'];
	// 	$check_password = User::where(['admin'=>'1'])->first();
	// 	if(Hash::check($current_password, $check_password->password)){
	// 		echo "true";die;
	// 	}else{
	// 		echo "false";die;
	// 	}

	// }

	// public function updatePassword(Request $request){

	// 	if($request->isMethod('post')){
	// 		$data = $request->all();
	// 		$check_password = User::where(['email'=>Auth::user()->email])->first();
	// 		$current_password = $data['current_pwd'];


	// 		if(Hash::check($current_password, $check_password->password)){
	// 			$password = bcrypt($data['new_pwd']);

	// 			User::where('id','1')->update(['password'=> $password]);

	// 			return redirect('/admin/pass-settings')->with('flash_message_success','Password Update Successful');
	// 		}else{
	// 			return redirect('/admin/pass-settings')->with('flash_message_error','Password Update Failed');
	// 		}


	// 	}
	// }

	public function addTag(Request $request){
		if($request->isMethod('post')){
			$data = $request->all();

			$tag =  new Tag;
			$tag->name = $data['tag_name'];
			$tag->save();
			return redirect()->back()->with('flash_message_success','Tag have been saved successfully');
		}

		return view('Authority.tags.add_tag');
	}

	public function viewTags(){

		$tags = Tag::get();

		return view('Authority.tags.view_tag')->with(compact('tags'));
	}

	public function deleteTag( $id = null){
		$tag = Tag::where(['id'=>$id])->first();
		$tag->fields()->detach();
		Tag::where(['id'=>$id])->delete();
		return redirect('/view-tags')->with('flash_message_success','Tag Have Been Deleted Successfully');
	}

	public function addDoctor(Request $request){
		if($request->isMethod('post')){
			$data = $request->all();
			//echo "<pre>";print_r($data);die;
			$doctor = new Doctor;
			$doctor->first_name = $data['first_name'];
			$doctor->last_name = $data['last_name'];
			$doctor->field = $data['field'];
			$doctor->qualification = $data['qualification'];
			$doctor->date_of_birth = $data['date_of_birth'];
			$doctor->university = $data['university'];
			$doctor->address = $data['address'];
			$doctor->office_hour = $data['office_hour'];
			$doctor->fee = $data['fee'];
			$doctor->achievement = $data['achievement'];
			$doctor->about = $data['about'];
			$doctor->email = $data['email'];
			$doctor->password = md5($data['password']);
			if($request->hasFile('image')){

                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    ///Resize Image For better use
                    $extention = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extention;
                    $large_image_path = 'images/backend_images/doctors_images/'.$filename;
                    
                    Image::make($image_tmp)->save($large_image_path);
                    
                    //store image name in product table

                    $doctor->image = $filename;
                }
            }
			$doctor->status = $data['status'];

			$doctor->save();
			return redirect('/doctor/view-doctors')->with('flash_message_success','Doctors Fields Have Been added Successfully.');
			
		}

		$field = Field::get();
		return view('Authority.doctor.add_doctor')->with(compact('field'));
	}


	public function viewDoctors(){

		$doctors = Doctor::get();
		return view('Authority.doctor.view_doctors')->with(compact('doctors'));
	}

	public function editDoctor(Request $request,$id = null){

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

            if(empty($data['status'])){
                $status = 0;
            }else{
                $status = 1;
            }

            Doctor::where(['id'=>$id])->update(['first_name'=>$data['first_name'],'last_name'=>$data['last_name'],'field'=>$data['field'],'qualification'=>$data['qualification'],'fee'=>$data['fee'],'university'=>$data['university'],'office_hour'=>$data['office_hour'],'achievement'=>$data['achievement'],'address'=>$data['address'],'date_of_birth'=>$data['date_of_birth'],'about'=>$data['about'],'email'=>$data['email'],'image'=>$filename,'status'=>$status]);

            return redirect('/doctor/view-doctors')->with('flash_message_success','Doctor Data Has Been Edited successfully.');
		}


		$field = Field::get();
		$doctor = Doctor::where(['id'=>$id])->first();
		return view('Authority.doctor.edit_doctor')->with(compact('doctor','field'));
	}
}
