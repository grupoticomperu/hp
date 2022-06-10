<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostings', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('imagen')->nullable();
            $table->string('imagen2')->nullable();
            $table->text('storage')->nullable();      
            $table->text('bandwidth')->nullable();      
            $table->text('cpanel')->nullable();      
            $table->text('emails')->nullable();      
            $table->text('bd')->nullable(); 
            $table->double('price', 8, 2)->nullable();
            $table->text('shortdescription')->nullable();      
            $table->text('longdescription')->nullable();  
            $table->boolean('state')->default(false);  

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->unsignedBigInteger('subcategoryhosting_id')->nullable();
            $table->foreign('subcategoryhosting_id')->references('id')->on('subcategoryhostings')->onDelete('cascade');  

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
        Schema::dropIfExists('hostings');
    }
}
