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
        Schema::create('purchase_history_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purchase_history_id');
            $table->string('status'); // You can define the status column as needed.
            $table->timestamps();

            // Define foreign key
            $table->foreign('purchase_history_id')->references('id')->on('purchase_histories')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_history_statuses');
    }
};
