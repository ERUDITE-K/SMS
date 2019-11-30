<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filesController extends Controller
{
    public function index(){
    	$files= file::orderBy('created_at','DESC')->paginate(30);
    	return view('staff',['files'=>$files]);
    }

    public function create(){
    	return view('staff');
    }

    public function store(Request $request){
    	$this->validate($request,[
    		'file'=>'required|file|max:25000'
    	])
    	$upload=$request->file('file');
    	$path= $upload->store('public/storage');
    	$file=file::create([
    		'title'=>$upload->getClientOriginalName();
    		'path'=>$path;
    	]);

    }
}
