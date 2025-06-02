<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gameflows', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('card_type');
            $table->string('card_id');
            $table->string('card_name');
            $table->string('c_img_name');
            $table->string('invest_amount');
            $table->string('c_desc');
            $table->string('selected');
            $table->string('is_selected');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gameflows');
    }
};
