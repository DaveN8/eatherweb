<?php

use App\Models\Alamat;
use App\Models\Keranjang;
use App\Models\User;
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
            $table->string("bukti_trf")->nullable();  
            $table->bigInteger("total_pembayaran");  
            $table->foreignIdFor(User::class)->references("id")->on("users");
            $table->foreignIdFor(Alamat::class)->references("id")->on("alamats");
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
