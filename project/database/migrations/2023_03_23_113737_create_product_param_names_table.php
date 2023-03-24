<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductParamNamesTable extends Migration
{
    private $table_name = 'product_param_name';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->id();
            $table->integer('position')->default(0);
            $table->tinyInteger('visible')->nullable(false);
            $table->string('name', 1024)->nullable(false);
        });
        DB::statement("ALTER TABLE  $this->table_name MODIFY COLUMN position INTEGER (11);");
        DB::statement("ALTER TABLE  $this->table_name MODIFY COLUMN visible INTEGER (1);");
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
