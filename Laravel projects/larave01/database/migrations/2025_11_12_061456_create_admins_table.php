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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
             $table->string('name');
            $table->string('email');
            $table->bigInteger('mobile');
            $table->string('password'); //$2y$10$.BoK4Fj6.lJ8shFeLcASbuYeFlOvFL/G4uictGH2UZwZJ.Pc4Iz.6-->123456
            $table->string('image')->default('default.png'); // 👈 Added image column with default value
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
        Schema::dropIfExists('admins');
    }
};
