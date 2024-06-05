<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('menu_admins', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->text('content');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('menu_admins');
    }
    
};
