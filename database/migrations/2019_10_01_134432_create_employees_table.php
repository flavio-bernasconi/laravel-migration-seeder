<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Azienda;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aziendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gender');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birthDay');
            $table->string('jobTitle');
            $table->float('salary', 7, 2);
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
        Schema::dropIfExists('employees');
    }
}
