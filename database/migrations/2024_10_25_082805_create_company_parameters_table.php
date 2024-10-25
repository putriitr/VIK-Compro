<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('company_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('no_wa')->nullable();
            $table->text('alamat')->nullable();
            $table->string('ig')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('ekatalog')->nullable();
            $table->string('twitter')->nullable();
            $table->string('fb')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->text('sejarah_perusahaan')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('service_1')->nullable();
            $table->string('service_2')->nullable();
            $table->string('service_3')->nullable();
            $table->string('service_4')->nullable();
            $table->string('ecommerce')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_parameters');
    }
};
