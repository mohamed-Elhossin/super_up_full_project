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
        Schema::create('apply_status', function (Blueprint $table) {
            $table->id();
            $table->string("message");
            $table->string("status");
            $table->integer("numberOfRequests");
            $table->dateTime("workAfter")->nullable();
            $table->bigInteger("admin_id")->unsigned();
            $table->foreign('admin_id')->references('id')->on("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_status');
    }
};
