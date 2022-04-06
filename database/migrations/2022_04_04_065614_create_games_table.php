<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            //->nullable()
           // ->charset('utf8mb4');
            $table->text('description')->nullable();
            $table->string('publisher',100)->comment('game publisher');
            $table->float('score')->nullable();
            $table->timestamps();
        });

       // if (Schema::hasTable('games')){
            //...
       // }

        //Schema::rename('games','to,')
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
