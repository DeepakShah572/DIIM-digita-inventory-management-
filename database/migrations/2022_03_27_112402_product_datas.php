<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_datas', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreign("id")->references("id")->on("users");
            $table->bigIncrements('pid')->unique();
            $table->string("Name");
            $table->unsignedInteger("Price");
            $table->integer("lot_size");
            $table->integer("lot_no");
            $table->string("location");
            $table->timestamp('added_at');
            
        });
        DB::table('product_datas')->insert(['pid' =>1000000000 , 'name' => 'whatever',"Price"=>1,"lot_no"=>1,"lot_size"=>1,"location"=>"jh33"]);
        DB::table('product_datas')->where('pid', 1000000000)->delete();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
