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

 public function register(Request $request){
    // dd($request->file('image'));
    $employee= new employee();
    	
        $employee->firstname=$request->input('Firstname');
        $employee->lastname=$request->input('Lastname');
        $employee->othername=$request->input('Othername');
        $employee->sex=$request->input('Sex');
    
        $employee->institution_id=$request->input('Institution');
        $employee->email=$request->input('email');
        $employee->phone=$request->input('Phone');
        $employee->address=$request->input('Address');
        $employee->place_of_residence=$request->input('PlaceofResidence');
        $employee->nationality=$request->input('Nationality');
        $employee->location=$request->input('Location');
        $employee->rank_id=$request->input('Position');
        $employee->date_employed=$request->input('Date');
        $employee->nationality=$request->input('Nationality');
        
    
         if ($request->file('image')){
            // dd($request);
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move( public_path('uploads/employee/'),$filename);
            $employee->image = '/uploads/employee/'.$filename;
            

         } else{
            return $request;
            $employee->image='';
         }
         $employee->save();


     return view('admin.employee',compact('employee','institution','rank'));
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
