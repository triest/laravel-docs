<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('inn');
            $table->string('pc', 20);
            $table->string('kc', 20);
            $table->string('bank', 20);
            $table->string('bic', 9);
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
        Schema::dropIfExists('anket');
    }
}
