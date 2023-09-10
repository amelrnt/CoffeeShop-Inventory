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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity_on_hand');
            $table->integer('reorder_point');
            $table->integer('lead_time');
            $table->decimal('ordering_cost', 10, 2)->nullable();
            $table->decimal('holding_cost', 10, 2)->nullable();
            $table->decimal('unit_price', 10, 2);
            $table->unsignedBigInteger('supplier_id');
            $table->timestamps();

            $table->foreign('supplier_id')->references('id')->on('supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory');
    }
};
