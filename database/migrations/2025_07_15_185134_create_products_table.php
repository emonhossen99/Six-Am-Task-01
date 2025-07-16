<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->integer('stock')->default(0);
            $table->double('price');
            $table->enum('status',[0,1])->comment('0 = Pending , 1 = Publish')->index();
            $table->timestamps();
            $table->index('category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
