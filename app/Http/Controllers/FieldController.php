<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Session;
use App\User;
use App\Field;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Image;
use App\Tag;
use DB;

class FieldController extends Controller
{
    public function addField(Request $request){

    	if($request->isMethod('post')){
    		$data = $request->all();
    		//echo "<pre>";print_r($data);die;

    		$field = new Field;
    		$field->field_name = $data['field_name'];
    		$field->description = $data['field_description'];
    		$field->url = $data['url'];
            $field->status = $data['status'];

    		$field->save();
            if(isset($request->tags)){
    		  $field->tags()->sync($request->tags,false);
            }else{
                $field->tags()->sync(array());
            }

    		return redirect()->back()->with('flash_message_success','Field Have Been Saved Successfully.');
    	}

    	$tags = Tag::get();

    	return view('Authority.fields.add_field')->with(compact('tags'));
    }

    public function viewFields(){

    	$fields = Field::get();
    	return view('Authority.fields.view_fields')->with(compact('fields'));
    }

    public function editField(Request $request , $id = null){

        if($request->isMethod('post')){
            $data = $request->all();
            $field = Field::where(['id'=>$id])->first();
            //echo "<pre>";print_r($data);die;
            if(empty($data['status'])){
                $status = 0;
            }else{
                $status = 1;
            }

            Field::where(['id'=>$id])->update(['field_name'=>$data['field_name'],'description'=>$data['field_description'],'url'=>$data['url'],'status'=>$status]);
            $field->tags()->sync($request->tags,true);

            return redirect('/fields/view-fields')->with('flash_message_success','Field Have Been Updated Successfully');
        }

    	$fields = Field::where(['id'=>$id])->first();
        $tags = Tag::get();
    	$field_tags = DB::table('field_tag')->get();
    	return view('Authority.fields.edit_field')->with(compact('tags','fields','field_tags'));
    }

    public function deleteField($id = null){
        $field = Field::where(['id'=>$id])->first();
        $field->tags()->detach();
        Field::where(['id'=>$id])->delete();
        return redirect('/fields/view-fields')->with('flash_message_success','Field Have Been Deleted Successfully');
    }
}
