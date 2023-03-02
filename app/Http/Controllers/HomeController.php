<?php

namespace App\Http\Controllers;

use App\Models\Appoitment;
use App\Models\bloag;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function home()
{
    if(Auth::id())
    {
        return redirect('home');
    }
    else{
$data =bloag::all();
    $doctordata = Doctor::all();
    return view('user.home',compact('doctordata','data'));
    };
}
public function login()
{
if(Auth::id())
{
    if(Auth::user()->usertype=='0')
    {
        $data =bloag::all();
        $doctordata = Doctor::all();
        return view('user.home',compact('doctordata','data'));

    }
    else
    {
        return view('admin.home');

    }

}
else
{
return redirect()->back();
}
}



public function appointment(request $request)
{
    if(Auth::user())
    {

        $request->validate([
            'name'=>"required | string ",
            'email'=>"required | email ",
            'date'=>"required  ",
            'field'=>'required | string',
            'number'=>'required | string',
            'message'=>'required | string'
            
          ]);

 $appointment = new Appoitment();
 $appointment->name=$request->name;
 $appointment->email=$request->email;
 $appointment->date=$request->date;
 $appointment->field=$request->field;
 $appointment->number=$request->number;
 $appointment->message=$request->message;
$appointment->userid=Auth::user()->id;
 $appointment->status='in progress';
 $appointment->save();
return redirect()->back()->with('message','Doctor Add Succesfully');
}
else
{
    return redirect()->back()->with('messages','Log in First');
}
}



public function myappointment()
{
     if(Auth::id())
     {
     $id = Auth::user()->id;
     $appointment = Appoitment::where('userid',$id)->get();

   
    return view('user.myappointment',compact('appointment'));
    }
    else{
        return redirect()->back();
    }
}

public function cancelappointment($id)
{
    $data = Appoitment::find ($id);
    $data->delete();
    return redirect()->back();
}



public function searchappointment(Request $request)
{
   
    $res = $request->search;

    if($res !="")
    {
        
        $find = Appoitment::where('name','like', "%$res%")->orwhere('email','like', "%$res%")->get();
       
      
    }
    else
    {
        $find= Appoitment::all();
    };
   
   
        return view('user.searchappointment',compact('find'));

    


   
}
};
