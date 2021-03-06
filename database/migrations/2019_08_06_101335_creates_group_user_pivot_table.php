<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesGroupUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("group_id");
            $table->unsignedBigInteger("user_id");
            $table->timestamps();
        });

        // Schema::table('group_user', function (Blueprint $table) {
        //     $table->foreign('group_id')->references('id')->on('groups');
        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_user');
    }

}
