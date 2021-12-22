<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNimToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('nim');
            $table->string('programstudi');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->string('jeniskelamin');
            $table->string('agama');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('roles')->default('USER');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nim');
            $table->dropColumn('programstudi');
            $table->dropColumn('tempatlahir');
            $table->dropColumn('tanggallahir');
            $table->dropColumn('jeniskelamin');
            $table->dropColumn('agama');
            $table->dropColumn('alamat');
            $table->dropColumn('kota');
            $table->dropColumn('provinsi');
            $table->dropColumn('roles');
        });
    }
}
