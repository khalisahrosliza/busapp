<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengerDataTable extends Migration
{
    public function up()
    {
        Schema::create('passenger_data', function (Blueprint $table) {
            $table->id();
            $table->string('rfid_data')->nullable();
            $table->integer('passenger_count')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('passenger_data');
    }
}
