<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Toastr;
use File;
use Redirect;
use DB;
use Validator;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     $data['page']= Page::all();
          return view('admin.page.pages',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.addpage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
         $insert_data=new Page;
        $requested_data=$request->all();
   $validation = Validator::make($request->all(),[
            'title' => 'required|max:50',
            'description' => 'required',
        ]);
         if ($validation->fails()) 
        {
            return back()->withInput()->withErrors($validation);
        }
        else
        {
            $insert_data->fill($requested_data)->save();
            
            return redirect::to('/page');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['value'] = Page::where('page_id',$id)->first();
        return view('admin.page.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    $insert_data=Page::where('page_id',$id)->first();
    $requested_data=$request->all();
    $validation = Validator::make($request->all(),[
            'title' => 'required|max:50',
            'description' => 'required',
            
        ]);
         if ($validation->fails()) 
        {
            return back()->withInput()->withErrors($validation);
        }
        else
        {
            
            $insert_data->update($requested_data);
            
            return Redirect::to('/page');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             page::findOrFail($id)->delete();
            return back();
    }
}
