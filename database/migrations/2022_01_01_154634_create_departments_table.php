<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('bloc');
            $table->unsignedSmallInteger('rooms_number');
            $table->unsignedBigInteger('materiel_Responsable_id')->nullable();
            $table->timestamps();

            $table->foreign('materiel_Responsable_id')
                ->references('id')
                ->on('agent_services')
                ->onUpdate('cascade')
                // ->cascadeOnUpdate()
                ->onDelete('SET NULL');
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
        Schema::dropIfExists('departments');
    }
}
