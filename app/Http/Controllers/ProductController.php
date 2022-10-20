<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function submit_data(Request $requst){
      $img =  $requst->img;
      $name =  $requst->name;
      $price =  $requst->price;


      $responce = ProductModel::insert([
        'img' => $img,
        'name' =>  $name,
        'price' =>  $price,
    ]);

    if($responce == 1){
        return 1;
    }else{
        return 0;
    }


    }

    function get_data(){
         $responce = ProductModel::get();

         return json_encode($responce);
    }
    function update_data(Request $requst){
        $img =  $requst->img;
        $name =  $requst->name;
        $price =  $requst->price;
        $id = $requst->id;
  
  
        $responce = ProductModel::where('id',$id)->update([
          'img' => $img,
          'name' =>  $name,
          'price' =>  $price,
      ]);
  
      if($responce == 1){
          return 1;
      }else{
          return 0;
      }
    }

    function delete_data(Request $requst){
       
        $id = $requst->id;
  
  
        $responce = ProductModel::where('id',$id)->delete();
        
      if($responce == 1){
          return 1;
      }else{
          return 0;
      }
    }

    function get_single_data(Request $request){
           $id = $request->id;

           $response = ProductModel::where('id', $id)->first();

         return json_encode($response);

    }
}
