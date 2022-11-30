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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id')->index()->constrained()->cascadeOnDelete();
            $table->integer('check_period');
            $table->integer('page_check_count')->default(1);
            $table->boolean('track_idealist_check')->default(false);
            $table->string('track_idealist_text')->nullable();
            $table->boolean('track_olx_check')->default(false);
            $table->string('track_olx_text')->nullable();
            $table->boolean('track_fb_check')->default(false);
            $table->string('track_fb_text')->nullable();
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
        Schema::dropIfExists('events');
    }
};
