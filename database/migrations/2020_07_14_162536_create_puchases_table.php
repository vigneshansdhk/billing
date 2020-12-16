<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puchases', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_serial_number');
            $table->date('invoice_date');
            $table->integer('supplier_id');
            $table->string('hsn_code');
            $table->string('qty_metric');
            $table->string('basic_rate');
            $table->string('qty_bags');
            $table->string('discount');
            $table->string('igst_percentage');
            $table->string('tax_value');
            $table->string('igst_amount');
            $table->string('total_invoice_value');
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
        Schema::dropIfExists('puchases');
    }
}
