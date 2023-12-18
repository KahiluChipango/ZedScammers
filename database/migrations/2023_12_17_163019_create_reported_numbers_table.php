<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportedNumbersTable extends Migration
{
    public function up()
    {
        Schema::create('reported_numbers', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number');
            $table->text('description');
            $table->timestamp('reported_at')->useCurrent();
            // Add other fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reported_numbers');
    }
}
