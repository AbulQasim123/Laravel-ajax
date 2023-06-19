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
        Schema::create('cruds', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('firstname');
            $table->string('lastname');
            $table->timestamps();
            // $table->nullableTimestamps();
                
                // Use instead of  $table->timestamps()
            // $table->timestamp('created_at')->useCurrent();
            // $table->timestamp('updated_at')->useCurrentOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cruds');
    }
};
