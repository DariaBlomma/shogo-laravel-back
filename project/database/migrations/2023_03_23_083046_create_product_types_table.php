<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypesTable extends Migration
{
    private $table_name = 'product_type';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('position')->default(0);
            $table->string('url', 255)->nullable(false);
            $table->string('name', 255)->nullable(false);
            $table->text('notice');
            $table->tinyInteger('visible')->nullable(false);
            $table->unique('url');
        });

        DB::statement("ALTER TABLE $this->table_name MODIFY COLUMN position INTEGER (11);");
        DB::statement("ALTER TABLE $this->table_name MODIFY COLUMN visible INTEGER (1);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table_name);
    }
}
