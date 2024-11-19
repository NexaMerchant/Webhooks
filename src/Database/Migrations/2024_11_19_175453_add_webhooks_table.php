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
        // create webhooks table
        Schema::create('webhooks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('url');
            $table->string('event');
            $table->timestamps();

            $table->unique(['user_id', 'event']); // user can have only one webhook for each event

            $table->index('event');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //drop webhooks table
        Schema::dropIfExists('webhooks');
    }
};
