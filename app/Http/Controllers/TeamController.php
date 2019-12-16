<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Toastr;
use File;
use Redirect;
use DB;
use Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['member'] = Team::all();
        return view('admin.team.team',$data);
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
        $insert_data=new Team;
        $requested_data=$request->all();
   $validation = Validator::make($request->all(),[
            'name' => 'required|max:30',
            'email' => 'required|email',
            'phone' => 'required',
            'designation' => 'required',
            'address' => 'required',
            'expertise' => 'required',
            'details' => 'required',
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
                $path="admin_resource/image/member/";
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
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data['member'] = Team::where('team_id',$id)->first();
        return view('admin.team.view',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['value'] = Team::where('team_id',$id)->first();
        return view('admin.team.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       
    $insert_data=Team::where('team_id',$id)->first();
    $requested_data=$request->all();
    $validation = Validator::make($request->all(),[
            'name' => 'required|max:30',
            'email' => 'required|email',
            'phone' => 'required',
            'designation' => 'required',
            'address' => 'required',
            'expertise' => 'required',
            'details' => 'required',
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
                $path="admin_resource/image/member/";
                $fullname = $path.$name;
                $file->move($path, $fullname);
                $requested_data['image'] = $fullname;
                 if(File::exists(asset($insert_data->image)))
                {
                    File::delete(asset($insert_data->image));
                }
            }

            $insert_data->fill($requested_data)->save();
            
            return Redirect::to('/team');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            Team::findOrFail($id)->delete();
            return back();
    }
}
