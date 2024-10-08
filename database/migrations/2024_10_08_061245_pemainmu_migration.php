<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('pemainmu', function(Blueprint $table){
            $table->id();
            $table->string('nama_pemain');
            $table->string('posisi'); 
            $table->integer('no_punggung');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
