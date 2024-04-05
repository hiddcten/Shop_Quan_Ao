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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table-> string('name') -> nullable();
            $table-> string('material') -> nullable();
            $table-> string('price_nomal') -> nullable();
            $table-> string('price_sale') -> nullable();
            $table-> longtext('description') -> nullable();
            $table-> longtext('content') -> nullable();
            $table-> string('image') -> nullable();
            $table-> string('images') -> nullable();
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
        Schema::dropIfExists('products');
    }
};
