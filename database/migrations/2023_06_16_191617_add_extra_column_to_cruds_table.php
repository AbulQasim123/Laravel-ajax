<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Add Extra Columns into cruds Table
        Schema::table('cruds', function (Blueprint $table) {
            $table->after('lastname', function () use ($table) {
                $table->string('email')->nullable();
                $table->string('gender')->nullable();
                $table->string('phone')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cruds', function (Blueprint $table) {
            $table->dropColumn('email');
            $table->dropColumn('gender');
            $table->dropColumn('phone');
        });
    }
};
