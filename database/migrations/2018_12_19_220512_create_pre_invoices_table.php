<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); // the client
            $table->integer('user_data_id')->unsigned(); // the data to use in the invoice
            //$table->string('products'); // serialized products paid in the invoice.
            $table->integer('company_id'); // link to copany details: name, legal number... - todo
            $table->integer('invoice_number'); // the final invoice number, generated by the accounting software
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('pre_invoice_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity')->unsigned(); // quantity
            $table->integer('pre_invoice_id')->unsigned(); // pre_invoice id
            $table->integer('enrollment_id')->unsigned()->nullable(); // enrollment id
            $table->string('product_name');
            $table->decimal('price', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pre_invoices');
    }
}
