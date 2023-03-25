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
        if (! Schema::hasTable("urls")) {
            # code...
            Schema::create('urls', function (Blueprint $table) {
                $table->id();
                $table->string("short_url")->unique();
                $table->text("original_url");
                $table->integer("click_count")->default(0);
                $table->foreignId("user_id")
                    ->nullable()
                    ->constrained("users");
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urls');
    }
};
