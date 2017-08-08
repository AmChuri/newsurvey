<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfrasurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infrasurveys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('empno');
            $table->string('location');
            $table->string('department');
            $table->string('state');
            $table->string('question1');
            $table->string('remark1');
            $table->string('question2');
            $table->string('remark2');
            $table->string('question3');
            $table->string('remark3');
            $table->string('question4');
            $table->string('remark4');
            $table->string('question5');
            $table->string('remark5');
            $table->string('question6');
            $table->string('remark6');
            $table->string('question7');
            $table->string('remark7');
            $table->string('question8');
            $table->string('remark8');
            $table->string('question9');
            $table->string('remark9');
            $table->string('suggestion1');
            $table->string('suggestion2');
            $table->string('suggestion3');
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
        Schema::dropIfExists('infrasurveys');
    }
}
