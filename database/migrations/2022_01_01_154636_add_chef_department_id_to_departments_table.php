<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChefDepartmentIdToDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('departments', function (Blueprint $table) {

            $table->unsignedBigInteger('department_chef_id')->nullable();

            $table->foreign('department_chef_id')
                ->references('id')
                ->on('doctors')
                ->onUpdate('cascade')
                ->onDelete('SET NULL');
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
        Schema::table('departments', function (Blueprint $table) {
            $table->dropColumn('department_chef_id');
        });
    }
}
