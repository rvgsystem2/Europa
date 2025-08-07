<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('contact_number');
            $table->string('principal_name');
            $table->string('principal_mobile_number');
            $table->string('principal_email_id');
            $table->string('school_name');
            $table->text('school_address');
            $table->string('school_city');
            $table->string('school_state');
            $table->string('school_pincode');
            $table->string('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
