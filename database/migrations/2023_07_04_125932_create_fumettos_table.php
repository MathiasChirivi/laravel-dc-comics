<?php

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
        Schema::create('fumettos', function (Blueprint $table) {
            $table->id();

            $table->string("title", 50);
            $table->text("description")->nullable();
            $table->string("thumb")->nullable();
            $table->float("price",8,2)->nullable();
            $table->string("series",100)->nullable();
            $table->date("sale_date")->nullable();
            $table->string("type", 50);

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
        Schema::dropIfExists('fumettos');
    }
};
