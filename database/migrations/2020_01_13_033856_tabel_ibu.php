<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelIbu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id_ibu');
            $table->string('nama_ibu');
            $table->string('nama_suami');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('tlp');
            $table->string('agama');
            $table->string('status');
            $table->date('tanggal_meninggal');
            $table->string('penyebab_meninggal');
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
        //
    }
}
