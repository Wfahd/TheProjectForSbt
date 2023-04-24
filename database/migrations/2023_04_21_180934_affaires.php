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
        Schema::create('affaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->longText('Description');
            $table->string('status');
             $table->timestamps();
             $table->unsignedInteger('client_id');//->nullable()->default(null)
            $table->foreign('client_id')->references('id')->on('clients');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
