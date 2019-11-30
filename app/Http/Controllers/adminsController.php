<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\institution;
use App\rank;
use App\file;
use App\admin;
class adminsController extends Controller
{
   public function form(){
        $institutions=institution::all();
        $ranks=rank::all();
        return view('reg',compact('institutions','ranks'));
}

    public function admin(){
        $rank=rank::all();
        return view('dash', compact('rank'));
    }

    public function admin_profile(){
        return view('admin.profile');
    }

    public function admin_index(){
    $employees=employee::all();
    $ranks=rank::all();
    $institutions=institution::all();
    return view('admin.index', compact('employees','ranks','institutions'));
}
    public function employee_profile($id){
    $employee=employee::find($id);
    return view('admin.employee',compact('employee'));
}
}
