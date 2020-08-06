<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Role extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('tbl_role', function (Blueprint $table) {
      $table->id();
      $table->integer('id_metode');
      $table->integer('if_yes');
      $table->integer('if_no');
      $table->integer('id_end');
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
    Schema::drop('tbl_role');
  }
}
