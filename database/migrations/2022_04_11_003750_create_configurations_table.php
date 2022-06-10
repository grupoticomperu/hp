<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->text('icon')->nullable();
            $table->string('telephono')->nullable();
            $table->string('movil', 50)->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();           
            $table->string('instagram')->nullable();
            $table->string('email')->nullable();                      
            $table->string('address')->nullable();           
            $table->string('description')->nullable();

            $table->string('metatitle')->nullable();
            $table->string('metadescription')->nullable();
            $table->string('keywords')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');  
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
        Schema::dropIfExists('configurations');
    }
}
