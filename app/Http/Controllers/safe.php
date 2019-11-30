<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use App\institution;
use App\rank;
use App\file;
use App\admin;

class employeesController extends Controller
{
    

    

    
    public function reg(){
        return view('auth.register');
    }

 public function register(Request $request,employee $employee,institution $institution, rank $rank ){
    	$fname=$request->Firstname;
    	$lname=$request->Lastname;
    	$oname=$request->Othername;
    	$sex=$request->Sex;
    	$email=$request->email;
    	$phone=$request->Phone;
    	$nat=$request->Nationality;
    	$place=$request->PlaceofResidence;
    	$ins=$request->Institution;
    	$loc=$request->Location;
    	$address=$request->Address;
    	$position=$request->Position;
    	$date=$request->Date;


         $employee=employee::create([
        $employee->firstname=$request->input('Firstname');
        'lastname'=>$lname,
        'othername'=>$oname,
        'sex'=>$sex,
        'employee_id'=>$employee->id,
        'email'=>$email,
        'phone'=>$phone,
        'institution_id'=>$ins,
        'address'=>$address,
        'place_of_residence'=>$place,
        'nationality'=>$nat,
        'location'=>$loc,
        'position/rank'=>$position,
        'date_employed'=>$date,
        'institution_id'=>$ins,
        'rank_id'=>$position
        ]);

    
         if ($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/employee/',$filename);

         } else{
            return $request;
            $employee->image='';
         }
         $employee->save();


     return view('employee.profile',compact('employee','institution','rank'));
}

    
    

public function profile(employee $employee, rank $rank){
    return view('profile',compact('employee','rank'));
}

public function editform($id){
    $employee=employee::find($id);
    $institution=$employee->institution;
    $institutions=institution::all();
    $ranks=rank::all();
    
    $rank=$employee->rank;

    return view('editform',compact('employee','institution','rank','institutions','ranks'));




}

public function del($id){
    employee::destroy($id);
    return redirect(route('form'));
}

public function update(Request $request,$id){
        $fname=$request->Firstname;
        $lname=$request->Lastname;
        $oname=$request->Othername;
        $sex=$request->Sex;
        $email=$request->email;
        $phone=$request->Phone;
        $nat=$request->Nationality;
        $place=$request->PlaceofResidence;
        $ins=$request->Institution;
        $loc=$request->Location;
        $address=$request->Address;
        $position=$request->Position;
        $date=$request->Date;

        $employee=employee::find($id);
        $employee->update([
        'firstname'=>$fname,
        'lastname'=>$lname,
        'othername'=>$oname,
        'sex'=>$sex,
        'employee_id'=>$employee->id,
        'email'=>$email,
        'phone'=>$phone,
        'institution_id'=>$ins,
        'address'=>$address,
        'place_of_residence'=>$place,
        'nationality'=>$nat,
        'location'=>$loc,
        'position/rank'=>$position,
        'date_employed'=>$date,
        'institution_id'=>$ins,
        'rank_id'=>$position

        ]);
        return redirect(route('profile'));


} 

public function home(rank $rank, employee $employee, institution $institution){
    $ranks=rank::all();
    $employees=employee::all();
    $institutions=institution::all();
    return view ('homepage', compact('ranks','employees','institutions'));
}



public function employee_profile($id){
    $employee=employee::find($id);
    return view('employee.profile',compact('employee'));
}


}
