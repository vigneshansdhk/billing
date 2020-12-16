<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_id');
            $table->integer('customer_id');
            $table->integer('qty');
            $table->string('invoice_number');
            $table->string('amount');
            $table->integer('bag_per_price');
            $table->string('cgst');
            $table->string('igst');
            $table->string('total_amount');
            $table->string('discount');
            $table->integer('payment_id');
            $table->integer('reference_id')->nullable();
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
        Schema::dropIfExists('sales');
    }
}
