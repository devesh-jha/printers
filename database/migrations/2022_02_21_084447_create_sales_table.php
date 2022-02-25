<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('name',191)->nullable();
            $table->string('contact',191)->nullable();
            $table->longText('address')->nullable();
            $table->longText('gstno')->nullable();
            $table->longText('description')->nullable();

            $table->string('advancepay',191)->nullable();
            $table->string('total',191)->nullable();
            $table->date('date')->nullable();
            $table->string('invoiceid',191)->nullable();

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
        Schema::dropIfExists('sales');
    }
}
