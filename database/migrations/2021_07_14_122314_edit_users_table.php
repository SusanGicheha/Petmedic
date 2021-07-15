<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('pet_name')->after('password')->nullable();
            $table->text('phone_no')->after('name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('pet_breed')->nullable();
            $table->string('pet_gender')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropcolumn('pet_name');
            $table->dropcolumn('phone_no');
            $table->dropcolumn('date_of_birth');
            $table->dropcolumn('pet_breed');
            $table->dropcolumn('pet_gender');
        });
    }
}
