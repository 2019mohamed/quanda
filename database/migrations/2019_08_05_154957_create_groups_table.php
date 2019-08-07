<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger("creator_id");
            $table->timestamps();
        });
        
        Schema::table('groups', function (Blueprint $table) {
            $table->softDeletes();
        });

        // Schema::table('groups', function (Blueprint $table) {
        //     $table->foreign('creator_id')->references('id')->on('users');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }


}
