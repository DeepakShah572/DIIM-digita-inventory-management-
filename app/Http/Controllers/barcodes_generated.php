<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
class barcodes_generated extends Controller
{
    function index(){
        $lot_data=$this->barcodes();
        return view("barcodes_generated")->with('lot_data',$lot_data);
    }
    //
    public function barcodes(){
        $curr_lot=session("curr_lot");
        $lot_data=DB::select("select * from product_datas where lot_no=$curr_lot");
        session(["g_lot_data"=>$lot_data]);
        //return view("barcodes_generated",compact('lot_data'));
        return $lot_data;
    }
    public function download_pdf() {
       // $curr_lot=session("curr_lot");
     //   $lot_data=DB::select("select * from product_datas where lot_no=$curr_lot");
       // return view("barcodes_generated",compact('lot_data'));

        //$lot_data=$this->barcodes();
        $pdf = PDF::loadView("pdf");
        return $pdf->download("barcodes.pdf");

        //return $pdf->download('DIIM.pdf');
    
}
}