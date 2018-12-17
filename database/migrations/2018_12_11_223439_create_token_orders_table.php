<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTokenOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('token_orders')==false) {
            //
            Schema::create('token_orders', function (Blueprint $table) {
                $table->increments('order_id');
                $table->integer("user_id");
                $table->decimal("quantity");
                $table->boolean("is_crypto");
                $table->string("currency_symbol");

                $table->string("status");

                $table->timestamps();
              //  $table->primary('order_id');
                $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
            });
            DB::statement('ALTER TABLE oken_orders AUTO_INCREMENT = 1003;');
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('token_orders');
    }
}
