<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->unsignedTinyInteger('experience_number');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('department_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                // ->onDelete('cascade')
                // ->onUpdate('cascade');
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreign('department_id')
                ->references('id')
                ->on('departments')
                ->onUpdate('cascade')
                ->onDelete('RESTRICT');
                // ->cascadeOnUpdate()
                // ->restrictOnDelete();
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
