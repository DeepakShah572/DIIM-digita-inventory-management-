<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product_Data;

class create_barcodesController extends Controller
{
    public function create_barcodes(){
        return view("create_barcodes");
    }
    function generate_barcodes(Request $req)
    {
        if(array_key_exists("generate",$_POST) && $_POST["quantity"]!=0)
        {
            $sql="select max(lot_no) as lot_no  from product_datas";
            $conn=mysqli_connect(env("DB_HOST"),env("DB_USERNAME"),env("DB_PASSWORD"),env("DB_DATABASE"));
            $retrival=mysqli_query($conn,$sql);
            if (! $retrival){
                die("problem fetching data:");
            }
            $data=mysqli_fetch_array($retrival,MYSQLI_ASSOC);
            $lot=$data["lot_no"];
            $lot+=1;
            session(["curr_lot"=>$lot]);
            $user=auth()->user();
            //put data
            for($x = 0;$x < $_POST["quantity"]; $x++){
                $input=new Product_Data;
                $input->id = var_dump($user->id);
                $input->name=$req->name;
                $input->price=$req->price;
                $input->lot_size=$req->quantity;
                $input->location=$req->location;
                $input->lot_no=$lot;
                $input->added_at=date('Y-m-d H:i:s');
                $input->save();
            }
            return redirect("/barcodes_generated");
        }
    }
}