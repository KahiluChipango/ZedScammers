<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScamTypesTable extends Migration
{
    public function up()
    {
        Schema::create('scam_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scam_types');
    }
}
