<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dokumentasi_sekretariats', function (Blueprint $table) {
            $table->id();
            $table->string('foto1');
            $table->string('judul');
            $table->string('penulis');
            $table->string('description1');
            $table->string('quotes');
            $table->string('quotesby');
            $table->string('description2');
            $table->string('subjudul');
            $table->string('subfoto1');
            $table->string('subfoto2');
            $table->string('description3');
            $table->string('tags1')->nullable();
            $table->string('tags2')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumentasi_sekretariats');
    }
};
