<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamps();
            $table->string('top')->default('0');
            $table->string('topSize')->default('N/A');
            $table->string('topCollectDate');
            $table->string('shorts')->default('0');
            $table->string('shortsize')->default('N/A');
            $table->string('shortCollectDate');
            $table->string('socks')->default('0');
            $table->string('socksCollectDate');
            $table->string('stashEmail');
          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
