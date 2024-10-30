<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama Perusahaan
            $table->text('short_history'); // Sejarah Singkat
            $table->string('address'); // Alamat
            $table->string('phone'); // No Telepon
            $table->string('whatsapp')->nullable(); // No WhatsApp
            $table->text('vision'); // Visi
            $table->text('mission'); // Misi
            $table->text('service_1'); // Service 1
            $table->text('service_2')->nullable(); // Service 2
            $table->text('service_3')->nullable(); // Service 3
            $table->text('service_4')->nullable(); // Service 4
            $table->string('document_1')->nullable(); // Dokumen 1
            $table->string('document_2')->nullable(); // Dokumen 2
            $table->string('email')->unique(); // Email
            $table->string('ecommerce')->nullable(); // E-Commerce URL
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
