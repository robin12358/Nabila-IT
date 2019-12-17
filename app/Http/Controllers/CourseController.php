<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Redirect;
use App\Coursesubject;
use App\Course;
use Validator;

class CourseController extends Controller
{
    public function subject(){
    	$data['subject']= Coursesubject::all();
    	return view('admin.course.coursesubject',$data);
    } 
    public function addsubject(Request $request){
    	$name = $request->subject;
    	$validator = Validator::make($request->all(),[
    		'subject' => 'required|max:30'
    	]);
    	if ($validator->fails()){
    		return redirect(route('admin.course.subject'))
    		->withErrors($validator)
    		->withInput();
    	}else{
          Coursesubject::create([
              "subject_name" => $name,
          ]);
      }
      return redirect(route('admin.course.subject'));
    }
    public function delsubject($id){
         Coursesubject::where('subject_id',$id)
         ->delete();
         return redirect(route('admin.course.subject'));
    }
     public function subjectstatus($id){
        $subject = Coursesubject::where('subject_id',$id)->first();
       	if($subject->status == 1){
       		Coursesubject::where('subject_id',$id)
         ->update(['status'=>'0']);
     }elseif($subject->status == 0){
     	Coursesubject::where('subject_id',$id)
         ->update(['status'=>'1']);
     }
         return redirect(route('admin.course.subject'));
     }
     public function allcourse(){
        $data['course'] = Course::all();
      return view('admin.course.allcourse',$data);
        }
      public function addcourse(){
          $data['subject']= Coursesubject::all();
          $data['type']=array("Basic", "Medium", "advance");
      return view('admin.course.courseadd',$data);
        }
        public function storecourse(Request $request){
         $insert_data=new Course;
        $requested_data=$request->all();
         $validation = Validator::make($request->all(),[
            'title' => 'required|max:80',
            'details' => 'required',
            'subject_name' => 'required',
            'course_type' => 'required',
            'course_duration_munth' => 'required||numeric|digits_between:1,12',
            'course_duration_hour' => 'required||numeric|digits_between:1,1000',
            'trainer_name' => 'required|max:30',
            'trainer_image' => 'required',
            'course_fee' => 'required||numeric|digits_between:1,100000',
            'course_image' => 'required',
        ]);
         if ($validation->fails()) 
        {
            return back()->withInput()->withErrors($validation);
        }
        else
        {
            if($request->hasFile('trainer_image') and $request->hasFile('course_image'))
            {
                $file= $request->file('trainer_image');
                $file1= $request->file('course_image');
                $name = time().rand(11111, 99999). '.'.$file->getClientOriginalExtension();
                $name1 = time().rand(1111, 9999). '.'.$file1->getClientOriginalExtension();
                $path="admin_resource/image/trainer/";
                $path1="admin_resource/image/course/";
                $fullname = $path.$name;
                $fullname1 = $path1.$name1;
                $file->move($path, $fullname);
                $file1->move($path1, $fullname1);
                $requested_data['trainer_image'] = $fullname;
                $requested_data['course_image'] = $fullname1;
            }

            $insert_data->fill($requested_data)->save();
            
            return Redirect::to('/allcourse');
        }
      }
      public function coursview($id){
        $data['value']= Course::where('course_id',$id)->first();
        $data['subject']= Coursesubject::all();
        $data['type']=array("Basic", "Medium", "advance");

        return view('admin.course.view',$data);
      }
      public function coursedel($id){
            Course::findOrFail($id)->delete();
            return back();
      }
      public function courseedit($id){
        $data['value']= Course::where('course_id',$id)->first();
        $data['subject']= Coursesubject::all();
        $data['type']=array("Basic", "Medium", "advance");

        return view('admin.course.edit',$data);
      }
      public function courseupdate(Request $request, $id){
        $insert_data=Course::where('course_id',$id)->first();
        $requested_data=$request->all();
         $validation = Validator::make($request->all(),[
            'title' => 'required|max:80',
            'details' => 'required',
            'subject_name' => 'required',
            'course_type' => 'required',
            'course_duration_munth' => 'required||numeric|digits_between:1,12',
            'course_duration_hour' => 'required||numeric|digits_between:1,1000',
            'trainer_name' => 'required|max:30',
            'trainer_image' => 'required',
            'course_fee' => 'required||numeric|digits_between:1,100000',
            'course_image' => 'required',
        ]);
         if ($validation->fails()) 
        {
            return back()->withInput()->withErrors($validation);
        }
        else
        {
            if($request->hasFile('trainer_image') or $request->hasFile('course_image'))
            {   
                if($request->hasFile('trainer_image')){
                $file= $request->file('trainer_image');
                
                $name = time().rand(11111, 99999). '.'.$file->getClientOriginalExtension();
               
                $path="admin_resource/image/trainer/";
                
                $fullname = $path.$name;
                
                $file->move($path, $fullname);
                
                $requested_data['trainer_image'] = $fullname;
                if(File::exists(asset($insert_data->trainer_image)))
                {
                    File::delete(asset($insert_data->trainer_image));
                }
                
                }
                else{
                $file= $request->file('course_image');
                
                $name = time().rand(11111, 99999). '.'.$file->getClientOriginalExtension();
               
                $path="admin_resource/image/course/";
                
                $fullname = $path.$name;
                
                $file->move($path, $fullname);
                
                $requested_data['course_image'] = $fullname;
                if(File::exists(asset($insert_data->course_image)))
                {
                    File::delete(asset($insert_data->course_image));
                }
                }
            }

            $insert_data->fill($requested_data)->save();
            
            return Redirect::to('/allcourse');
        }
     }
     public function coursestatus($id){
        $subject = Course::where('course_id',$id)->first();
        if($subject->status == 1){
            Course::where('course_id',$id)
         ->update(['status'=>'0']);
     }elseif($subject->status == 0){
        Course::where('course_id',$id)
         ->update(['status'=>'1']);
     }
         return Redirect::to('/allcourse');
     }

 }
   