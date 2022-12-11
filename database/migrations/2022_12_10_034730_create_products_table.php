<?php

use App\Models\Flavours;
use App\Models\Kategori;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("image");
            $table->integer("stock");
            $table->bigInteger("price");
            $table->text("description");
            $table->enum("status", ["show", "hide"])->default("show");
            $table->foreignIdFor(Flavours::class)->references("id")->on("flavours");
            $table->foreignIdFor(Kategori::class)->references("id")->on("kategoris");
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
        Schema::dropIfExists('products');
    }
};
