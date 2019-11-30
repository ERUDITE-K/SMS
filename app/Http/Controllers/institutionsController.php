<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\institution;

class institutionsController extends Controller
{
    public function form(){
    	return view('institution.create');
    }

    public function create(Request $request){
    	$names=$request->name;

    	foreach ($names as $name) {
    		institution::create(['name'=>$name]);
    	}
        	
 		$institutions=institution::all();

    	return view('institution.index',compact('institutions'));
    }

    public function destroy($id){
    	institution::destroy($id);
    	return redirect(route('index'));
    }

    public function index(){
    	$institutions=institution::all();
    	return view('institution.index',compact('institutions'));
    }

    public function updateform($id){
    	$institution=institution::find($id);
    	return view('institution.update',compact('institution'));
    }

    public function update(Request $request, $id){
        $name=$request->name;
        $institution=institution::find($id);
        $institution->update(['name'=>$name]);
        return redirect(route('index'));
    }

    public function index2 ($id){
        $institution=institution::find($id);
        $employees=$institution->employee;
        return view('institution.ins',compact('institution','employees'));
    }
}
