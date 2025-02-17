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
        Schema::create('policy_guidelines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('policy_category_id');
            $table->unsignedBigInteger('committee_id');
            $table->string('title');
            $table->string('file')->nullable();
            $table->boolean('is_published')->default(1);
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
        Schema::dropIfExists('policy_guidelines');
    }
};
