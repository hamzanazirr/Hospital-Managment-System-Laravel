<?php

namespace App\Http\Controllers;

use App\Models\Appoitment;
use App\Models\bloag;
use App\Models\Doctor;
use BaconQrCode\Renderer\Path\Move;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Notification;

use App\Notifications\MailNotification;




class AdminController extends Controller
{
  public function adddoctor()
  {
    return view('admin.adddoctor');
  }


  public function upload(Request $request)
  {


    $request->validate([
      'name' => "required | string ",
      'email' => "required | email ",
      'location' => "required | string",
      'day' => 'required | string',
      'field' => 'required | string',

    ]);


    $doctor = new Doctor;
    $doctor->name = $request->name;
    $doctor->email = $request->email;
    $doctor->location = $request->location;
    $doctor->day = $request->day;
    $doctor->field = $request->field;

    if ($request->hasFile('img')){
      $file = $request->file('img');
    $exe = $file->getClientOriginalExtension();
    $imag = time() . '.' . $exe;
    $file->move('doctorimg', $imag);

    $doctor->img = $imag;
    }
    $doctor->save();
    return redirect()->back()->with('message', 'Doctor Add Succesfully');
  }

  public function show_admin_appi()
  {

    $data = Appoitment::all();
    return view('admin.show_admin_appi', compact('data'));
  }

  public function cancel($id)
  {
    $idd = Appoitment::find($id);
    $idd->status = "Cancel";
    $idd->save();
    return redirect()->back();
  }

  public function aprove($id)
  {
    $idd = Appoitment::find($id);
    $idd->status = "Approved";
    $idd->save();
    return redirect()->back();
  }

  public function doctor()
  {
    $data = Doctor::all();

    return view('admin.doctor', compact('data'));
  }


  public function delete($id)
  {
    $data = Doctor::find($id);

    $data->delete();

    return redirect()->back();
  }




  public function update($id)
  {
    $data = Doctor::find($id);

    return view('admin.updatedocter', compact('data'));
  }

  public function updateadd(Request $request, $id)
  {
    $data = Doctor::find($id);
    $request->validate([
      'name' => "required | string ",
      'email' => "required | email ",
      'location' => "required | string",
      'day' => 'required | string',
      'field' => 'required | string'
    ]);

    $data->name = $request->name;
    $data->email = $request->email;
    $data->location = $request->location;
    $data->day = $request->day;
    $data->field = $request->field;

    if ($request->hasFile("img")) {
      $file = $request->file('img');
      $exe = $file->getClientOriginalExtension();
      $imag = time() . '.' . $exe;
      $file->move('doctorimg', $imag);

      $data->img = $imag;
    }

    $data->save();
    return redirect()->back()->with('message', 'Doctor Update Succesfully');
  }
  public function search_appi_admin(Request $request)
  {


    $res = $request->search;

    if ($res != "") {

      $find = Appoitment::where('name', 'like', "%$res%")->orwhere('email', 'like', "%$res%")->get();
    } else {
      $find = Appoitment::all();
    };


    return view('admin.serchappi', compact('find'));
  }
  public function searchdoctor(Request $request)
  {

    $res = $request->search;

    if ($res != "") {

      $find = Doctor::where('name', 'like', "%$res%")->orwhere('email', 'like', "%$res%")->get();
    } else {
      $find = Doctor::all();
    };


    return view('admin.serchdoctor', compact('find'));
  }


  public function add_bloge()
  {
    return view('admin.add_bloge');
  }

  public function upload_bloag(Request $request)
  {


    $request->validate([

      'heading' => "required",
      'bloge' => "required ",
    ]);

    $bloag = new bloag;

    $bloag->heading = $request->heading;
    $bloag->bloag = $request->bloge;

    if ($request->hasFile('img')) {
      $file = $request->file('img');

      $exe = $file->getClientOriginalExtension();

      $img = time() . "." . $exe;

      $file->move('bloag', $img);
      $bloag->img = $img;
    }
    $bloag->save();
    return redirect()->back()->with('message','Add Bloag Successfuly');
  }

public function show_admian_bloge()
{

$data= bloag::all();


  return view('admin.show_admian_bloge',compact('data'));
}

public function delete_blog($id)
{

  $del = bloag::find($id);

  $del->delete();

  return redirect()->back();



}

public function send_mail($id)
{
    $data=Appoitment::find($id) ;
return view('admin.send_mail',compact('data'));

@dd($data);


}

public function send_email_touser(Request $request , $id)
{
$find=Appoitment::find($id);
$detail = [

 'from' => $request->from,
 'body' => $request->body,
 'url' => $request->url,
 'end' => $request->end,

];


Notification::send($find, new MailNotification($detail));
return redirect()->back();


}
};
