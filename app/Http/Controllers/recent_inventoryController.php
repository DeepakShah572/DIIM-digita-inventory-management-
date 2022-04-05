<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class recent_inventoryController extends Controller
{
  public function recent_inventory(){
    $product_data=DB::select('select * from product_datas order by added_at desc');
    return view("recent_inventory",compact('product_data'));
    }

}
