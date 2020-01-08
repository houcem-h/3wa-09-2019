<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rib');
            $table->unsignedMediumInteger('code_banq');
            $table->unsignedMediumInteger('code_guichet');
            $table->unsignedTinyInteger('code_rib');
            $table->unsignedBigInteger('titulaire');
            $table->double('solde')->default(10);
            $table->enum('devise', ['TND', 'EUR', 'USD'])->default('TND');
            $table->timestamps();
            $table->foreign('titulaire')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}
