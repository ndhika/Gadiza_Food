<?php

use Illuminate\Database\Migrations\Migration;
/*use App\Http\Controllers\Controller;*/
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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->integer('id_menu');
            $table->string('id_card');
            $table->binary('data_image'); // Use binary for image data
            $table->string('nama_image');
            $table->string('nama_card');
            $table->timestamps();
            $table->string('keranjang');//gambar keranjang 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
;
