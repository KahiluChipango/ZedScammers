<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScamTrendsTable extends Migration
{
    public function up()
    {
        Schema::create('scam_trends', function (Blueprint $table) {
            $table->id();
            $table->foreignId('scam_type_id')->constrained('scam_types');
            $table->date('trend_date');
            $table->text('description');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scam_trends');
    }
}
