<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('employee_id')->unsigned()->nullable();
            $table->timestamps();
            $table->string('Title_Transport', 191);
            $table->text('Description')->nullable();
            $table->string('Company', 191)->nullable();
            $table->string('Classes', 191)->nullable();
            $table->string('Type_Transport', 191);
            $table->string('State_Registration_Number', 191)->nullable();
            $table->date('Year_Issue')->nullable();
            $table->string('Diagnostic_card', 191)->nullable();
            $table->date('Validity_Date')->nullable();
            $table->smallInteger('Amount_Place_Bus');
            $table->boolean('Tachograph')->default(0);
            $table->boolean('Glonas_GPS')->default(0);
            $table->boolean('LogicalDelete')->default(0);

            $table->foreign('employee_id')->references('id')
                ->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
}
