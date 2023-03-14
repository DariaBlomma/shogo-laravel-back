<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('position')->default(0);
            $table->string('url', 255)->nullable(false);
            $table->string('name', 255)->nullable(false);
            $table->string('articul', 255)->nullable(false);
            $table->decimal('price', $precision = 10, $scale = 2)->nullable(false);
            $table->decimal('price_old', $precision = 10, $scale = 2)->nullable(false);
            $table->unsignedInteger('currency_id')->default(null);
            $table->text('notice');
            $table->text('content');
            $table->tinyInteger('visible')->nullable(false);
            $table->unique('url');
            $table->index('currency_id');
        });
        DB::statement('ALTER TABLE products MODIFY COLUMN position INTEGER (11);');
        DB::statement('ALTER TABLE products MODIFY COLUMN visible INTEGER (1);');
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
}
