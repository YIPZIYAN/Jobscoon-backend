<?php

use App\Models\Company;
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
        Schema::create('career_developments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date_start');
            $table->date('date_end');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('type');
            $table->string('link')->nullable();
            $table->string('location')->nullable();
            $table->longText('description');
            $table->integer('max_capacity');
            $table->integer('capacity')->nullable();
            $table->binary('image')->nullable();
            $table->foreignIdFor(Company::class)->constrained();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_developments');
    }
};
