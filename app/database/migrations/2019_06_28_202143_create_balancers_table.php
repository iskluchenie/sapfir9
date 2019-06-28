<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalancersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balancers', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('edrpou');
            $table->string('name', 50);
            $table->string('contract', 40);
            $table->date('contract_date');
            $table->string('contact', 256);
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
        Schema::dropIfExists('balancers');
    }
}
