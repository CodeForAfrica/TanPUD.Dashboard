<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entry_type');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('surname')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('gender')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('maskani')->nullable();
            $table->string('region')->nullable();
            $table->string('district')->nullable();
            $table->string('ward')->nullable();
            $table->string('street')->nullable();
            $table->string('drug_type')->nullable();
            $table->string('drug_type_other')->nullable();
            $table->string('drug_use')->nullable();
            $table->string('overdose')->nullable();
            $table->string('overdose_date')->nullable();
            $table->string('hiv_test')->nullable();
            $table->string('hiv_test_date')->nullable();
            $table->string('hiv_test_results')->nullable();
            $table->string('tb_test')->nullable();
            $table->string('tb_test_date')->nullable();
            $table->string('tb_test_results')->nullable();
            $table->string('hpv_test')->nullable();
            $table->string('hpv_test_date')->nullable();
            $table->string('hpv_test_results')->nullable();
            $table->string('mental_health_test')->nullable();
            $table->string('mental_health_test_date')->nullable();
            $table->string('mental_health_test_results')->nullable();
            $table->string('services')->nullable();
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
        Schema::dropIfExists('members');
    }
}
