<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
    	return view('admin.index');
    }
     public function teammember(){

    }
    public function addmember(){
    	return view('admin.team.addmember');
    }
    public function storemember(Request $request){

    }
   
}
