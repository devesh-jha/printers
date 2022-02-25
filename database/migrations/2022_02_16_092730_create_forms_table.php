<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->longText('name')->nullable();
            $table->string('size', 191)->nullable();
            $table->string('gsm',191)->nullable();
            $table->string('sheets',191)->nullable();
            $table->string('rfbundle',191)->nullable();
            $table->string('bundle',191)->nullable();
            $table->string('price', 191)->nullable();
            $table->string('amount_given',191)->nullable();
            $table->string('count',191)->nullable();
            $table->string('Wt_per_box',191)->nullable();
            $table->string('thickness',191)->nullable();



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
        Schema::dropIfExists('forms');
    }
}
