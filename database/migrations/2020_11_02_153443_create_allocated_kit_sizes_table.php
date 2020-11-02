<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllocatedKitSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allowcated_kit_sizes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('top');
            $table->integer('shorts');
            $table->integer('socks');

          

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allowcated_kit_sizes');
    }
}
