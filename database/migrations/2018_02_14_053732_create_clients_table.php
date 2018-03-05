<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Company Name');
            $table->string('Address');
            $table->string('Status')->default('Pending');
            $table->date('Next_Event')->nullable();
            $table->string('Event_Info')->nullable();


            $table->string('Contact_Person')->nullable();
            $table->string('Contact_Number')->nullable();

            $table->string('Remarks')->nullable();

            $table->integer('Agent_ID')->nullable();

            $table->text('Requirement')->nullable();

            $table->date('Deadline')->nullable();

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
        Schema::dropIfExists('clients');
    }
}
