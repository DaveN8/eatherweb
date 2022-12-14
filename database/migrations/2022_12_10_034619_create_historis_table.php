<?php

use App\Models\Keranjang;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historis', function (Blueprint $table) {
            $table->id();
            $table->enum("status_payment",["proses", "sudah"])->default("proses");        
            $table->enum("order_status",["proses", "sudah"])->default("proses");        
            $table->string("bukti_trf");  
            $table->foreignIdFor(Keranjang::class)->references("id")->on("keranjangs"); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historis');
    }
};
