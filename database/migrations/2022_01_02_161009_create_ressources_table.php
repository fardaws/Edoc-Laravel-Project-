<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRessourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ressources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('reference')->unique();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->timestamps();

            // $table->foreignId('department_id')
            //     ->constrained('departments')
            //     ->onDelete('SET NULL')
            //     ->onUpdate('cascade');

            $table->foreign('department_id')
                ->references('id')
                ->on('departments')
                // ->cascadeOnUpdate()
                // ->restrictOnDelete();
                ->onDelete('SET NULL')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ressources');
    }
}

