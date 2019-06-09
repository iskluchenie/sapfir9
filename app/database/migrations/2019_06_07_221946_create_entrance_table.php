<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntranceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrance', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('house_id');
            $table->unsignedTinyInteger('floors_numb');
            $table->string('roof_exit', 40)->nullable();
            $table->enum('lkd_status', ['none', 'maintenance',  'require_recovery', 'scheduled', 'install_is_pos', 'status1', 'status2']);
            $table->enum('vdss_status', ['none', 'maintenance',  'require_recovery']);
            $table->unsignedInteger('balancer_id');
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
        Schema::dropIfExists('entrance');
    }
}
