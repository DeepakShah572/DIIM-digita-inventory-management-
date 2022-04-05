<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class barcode_scannerController extends Controller
{
    function index(Request $req){
        if(array_key_exists("enter",$_POST)){
           // $data=NULL;
            $entry_pid=$_POST["entry_pid"];
            $data=DB::select('select * from product_datas where pid=:id',['id'=>$entry_pid]);
           // $_SESSION["data"]=$data;
            //$data=$product_data;
            return view("barcode_scanner",compact("data"));
            //return ($_SESSION["data"]);
        }
        // else{
        //     $data=NULL
        //     return 
        // }

}
}