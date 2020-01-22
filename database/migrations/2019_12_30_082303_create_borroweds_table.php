<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borroweds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('department');
            $table->string('materialsname');
            $table->string('materialsserialnumber');
            $table->integer('quantity');
            $table->string('condition');
            $table->integer('shelfnumber');
            $table->integer('storenumber');
            $table->string('bfullname');
            $table->string('badress');

            $table->integer('bphonenumber');
            $table->string('boccupation');
            $table->date('date');

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
        Schema::dropIfExists('borroweds');
    }
}
