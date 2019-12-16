<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Toastr;
use File;
use Redirect;
use DB;
use Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $data['slider'] = DB::table('sliders')->orderBy('position', 'asc')->get();
        Toastr::success('Product Data Added Successfully', '', ["positionClass" => "toast-top-right"]);
        return view('admin.slider.slider',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $insert_data=new Slider;
        $requested_data=$request->all();
   $validation = Validator::make($request->all(),[
            'title' => 'required|max:30',
            'subtitle' => 'required|max:250',
            'image' => 'required',
        ]);
         if ($validation->fails()) 
        {
            return back()->withInput()->withErrors($validation);
        }
        else
        {
            if($request->hasFile('image'))
            {
                $file= $request->file('image');
                $name = time().rand(11111, 99999). '.'.$file->getClientOriginalExtension();
                $path="admin_resource/image/slider/";
                $fullname = $path.$name;
                $file->move($path, $fullname);
                $requested_data['image'] = $fullname;
            }

            $insert_data->fill($requested_data)->save();
            
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['slider']= Slider::where('slider_id',$id)->first();
        return view('admin.slider.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    $insert_data=Slider::where('slider_id',$id)->first();
    $requested_data=$request->all();
    $validation = Validator::make($request->all(),[
            'title' => 'required|max:30',
            'subtitle' => 'required|max:250',
            'image' => 'required',
        ]);
         if ($validation->fails()) 
        {
            return back()->withInput()->withErrors($validation);
        }
        else
        {
            if($request->hasFile('image'))
            {
                $file= $request->file('image');
                $name = time().rand(11111, 99999). '.'.$file->getClientOriginalExtension();
                $path="admin_resource/image/slider/";
                $fullname = $path.$name;
                $file->move($path, $fullname);
                $requested_data['image'] = $fullname;
                 if(File::exists(asset($insert_data->image)))
                {
                    File::delete(asset($insert_data->image));
                }
            }
            
            $insert_data->update($requested_data);
            
            return Redirect::to('/slider');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            Slider::findOrFail($id)->delete();
            return back();
    }
    public function sliderposition(Request $request){
        $sliderposition= Slider::find($request->id);
        $sliderposition->update(['position'=>$request->position]);
        $message = 'Position added successfully.';
        return  $message;
    }
       public function sliderstatus($id){
        $slider = Slider::where('slider_id',$id)->first();
        if($slider->status == 1){
            Slider::where('slider_id',$id)
         ->update(['status'=>'0']);
     }elseif($slider->status == 0){
        Slider::where('slider_id',$id)
         ->update(['status'=>'1']);
     }
          Toastr::success('Position Added Successfully', '', ["positionClass" => "toast-top-right"]);
            return back();
     }
}
