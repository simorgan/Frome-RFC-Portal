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
            $table->string('topCollectDate')->nullable();
            $table->string('shorts')->default('0');
            $table->string('shortsSize')->default('N/A');
            $table->string('shortsCollectDate')->nullable();
            $table->string('socks')->default('0');
            $table->string('socksCollectDate')->nullable();
            $table->string('stashEmail')->nullable();
            $table->string('topIssuedBy')->nullable();
            $table->string('shortsIssuedBy')->nullable();
            $table->string('socksIssuedBy')->nullable();
            
            
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
