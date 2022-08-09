<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourclasses', function (Blueprint $table) {
            $table->id();
            $table->string('class_title');
            $table->string('class_duration');
            $table->decimal('class_cost');
            $table->string('class_teacher')->nullable();
            $table->longText('class_description')->nullable();
            $table->string('class_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ourclasses');
    }
}
