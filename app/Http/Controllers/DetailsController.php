<?php

namespace App\Http\Controllers;

use App\DetailsModel;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function Insert(Request $request){
        $name = $request->input('name');
        $roll = $request->input('roll');
        $city = $request->input('city');
        $phone = $request->input('phone');
        $class = $request->input('class');

        $result = DetailsModel::insert(["name"=>$name, "roll"=>$roll, "city"=>$city, "phone"=>$phone, "class"=>$class]);
        if($result == true){
            return "Data Insert Successfull";
        }else{
            return "Data Insert Failed !!";
        }
    }

    public function Delete(Request $request){
        $id = $request->input('id');
        $result = DetailsModel::where('id',$id)->delete();

        if($result == true){
            return "Data Delete Successfully";
        }else{
            return "Data Delete Failed!!";
        }
    }

    public function Update(Request $request){
       $id = $request->input('id');
       $name = $request->input('name');
       $roll = $request->input('roll');

       $result = DetailsModel::where('id',$id)->update(["name"=>$name, "roll"=>$roll]);
       if($result == true){
           return "Update Data Successfull";
       }else{
           return "Update Data Failed!!";
       }
    }
}
