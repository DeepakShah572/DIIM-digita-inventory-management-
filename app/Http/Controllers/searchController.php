<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
    function index(Request $req){
        if(array_key_exists("searchQuerySubmit",$_POST)){
           $input=$req->all();
           unset($input['_token']);
           $name=$input['searchQueryInput'];
           $name=explode(" ",$name);
          // return $input['searchQueryInput'];
      //  $product_data=DB::select("select * from product_datas where Name='$name' group by lot_no");
      $product_data=DB::table('product_datas')
      ->whereIn('Name',$name)->get()
      ->groupBy("lot_no");  
      
      return view("search",compact("product_data"));
      //    return $product_data;
          //return $name;
         }
        
    }
}
