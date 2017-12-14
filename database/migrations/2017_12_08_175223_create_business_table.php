<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::enableForeignKeyConstraints();

        Schema::create('business', function (Blueprint $table) {
            $table->increments('id');
            $table->string('businessname');
            $table->string('businesstype');
            $table->string('industry');
            $table->longText('addressline1');
            $table->longText('addressline2');
            $table->string('landmark');
            $table->string('city');
            $table->integer('pincode');
            $table->string('state');
            $table->string('bank');
            $table->string('accountholdername');
            $table->string('accountnumber');
            $table->string('ifsccode');
            $table->string('pannumber');
            $table->string('gstcompliance');
            $table->string('gstin');
            $table->string('vat');   
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        //
        chema::dropIfExists('business');
    }
}
