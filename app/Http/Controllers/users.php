<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class users extends Controller
{
   function add(Request $req)
   {
    $data = new form;
    $data->name = $req->name;
    $data->username = $req->username;
    $data->dob = $req->dob;
    $data->email = $req->email;
    $data->name = $req->name;
    $data->phone = $req->phone;
    $data->NIC = $req->NIC;
    $data->male = $req->male;
    $data->female = $req->female;
    $data->other = $req->other;
    $data->password = $req->password;
    $data->confpassword = $req->confpassword;
    $data->save();
    return redirect ('form')


   }
}
public function formview()
{
    $users = form::all();
    return view('detail',['users'->$users]);
}

public function delete($id){
    $data = Admin::find($id);
    $data->delete();
    return redirect('user');
    }
 public function edit($id){
        $data = Admin::find($id);
        return view('edit',['update'=>$data]);
        }