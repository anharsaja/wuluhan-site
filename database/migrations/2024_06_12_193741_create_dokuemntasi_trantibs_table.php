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
        Schema::create('dokuemntasi_trantibs', function (Blueprint $table) {
            $table->id();
            $table->string('foto1');
            $table->string('judul');
            $table->string('penulis');
            $table->text('description1');
            $table->string('quotes')->nullable();
            $table->string('quotesby')->nullable();
            $table->text('description2')->nullable();
            $table->string('subjudul')->nullable();
            $table->string('subfoto1')->nullable();
            $table->string('subfoto2')->nullable();
            $table->text('description3')->nullable();
            $table->string('tags1')->nullable();
            $table->string('tags2')->nullable();
            $table->enum('status', ['private', 'public'])->default('public');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokuemntasi_trantibs');
    }
};
