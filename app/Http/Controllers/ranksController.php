<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rank;
use App\employee;
use App\institution;

class ranksController extends Controller
{
    public function form(){
    	return view('rank.create');
    }

    public function rindex(){
        $ranks=rank::all();
        return view('rank.index',compact('ranks'));

    }

    public function create(Request $request){
    	$names=$request->name;
    	
    	foreach ($names as $name) {

    		rank::create(['name'=>$name]);
    	}

    	$ranks=rank::all();
    	return redirect(route('rank_index'));


    }

    public function destroy($id){
    	rank::destroy($id);
    	return redirect(route('show'));
    }

    public function index(){
    	$ranks=rank::all();
    	return redirect('rank_index');
    }

    public function updateform($id){
    	$rank=rank::find($id);
    	return view('rank.update',compact('rank'));
    }

    public function update(Request $request, $id){
    	$name=$request->name;
    	$rank=rank::find($id);
    	$rank->update(['name'=>$name]);
    	return redirect(route('show'));

    }

    public function new($id){
        $rank=rank::find($id);
        $employees=$rank->employee;
        
        return view('rank.rank',compact('employees','rank'));
    }
    


}
