<?php

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
        Schema::create('alamats', function (Blueprint $table) {
            $table->id();
            $table->string("label");
            $table->string("penerima");
            $table->string("no_hp");
            $table->string("alamat_lengkap");
            $table->string("kecamatan");
            $table->string("kota");
            $table->string("deskripsi_alamat")->nullable();
            $table->string("kode_pos");
            // $table->foreign("user_id")->references("id")->on("users");
            $table->foreignIdFor(User::class)->references("id")->on("users");
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
        Schema::dropIfExists('alamats');
    }
};
