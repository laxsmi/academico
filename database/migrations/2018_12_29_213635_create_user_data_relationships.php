<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDataRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data_relationships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            //$table->timestamps();
        });

        DB::table('user_data_relationships')->insert(
            array(
                'id' => 1,
                'name' => 'SELF'
            )
        );

        DB::table('user_data_relationships')->insert(
            array(
                'id' => 2,
                'name' => 'FAMILLE'
            )
        );

        DB::table('user_data_relationships')->insert(
            array(
                'id' => 3,
                'name' => 'ENTREPRISE'
            )
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_data_relationships');
    }
}