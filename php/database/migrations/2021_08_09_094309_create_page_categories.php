<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('page')->constrained('pages')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('pool_category')->constrained('pool_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('isPrimary')->default(false);


            $table->string('slug')->nullable(false);
            $table->text('description')->nullable(true);
            $table->text('name')->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_categories');
    }
}
