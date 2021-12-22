<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembimbingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membimbing', function (Blueprint $table) {
            $table->id();
            $table->text('nim');
            $table->integer('iddosen');
            $table->text('uraianbimbingan');
            $table->text('jenisbimbingan');
            $table->date('tanggalbimbingan');
            $table->text('statusbimbingan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membimbing');
    }
}
