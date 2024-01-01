<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personal_form', function (Blueprint $table) {
            $table->id(); //
            $table->string("name"); //1
            $table->string("typeofId"); //2
            $table->text("image_id")->nullable(); //3
            $table->bigInteger("numberOfId"); //4
            $table->string("area"); //5
            $table->string("city"); //6
            $table->date("expire_data_id"); //7
            $table->integer("age"); //8
            $table->string("nationality"); //9
            $table->string("gendar"); //10
            $table->string("jobType"); //11
            $table->text("image_job_status")->nullable(); //12
            $table->string("employer"); //13
            $table->string("relationStatus"); //14
            $table->text("marital_image1")->nullable(); //15
            $table->text("marital_image2")->nullable(); // 16
            $table->string("salarytype"); // 17
            $table->integer("total_salary"); //18
            $table->integer("total_salary_with_you"); // 19
            $table->string("helthStatus"); //20

            $table->text("health_image")->nullable(); // 21
            $table->string("educational_level"); //22
            $table->string("rent"); // 23
            $table->string("rent_image")->nullable(); //24
            // $table->string("life_type");
            $table->string("national_address"); //25
            $table->string("phone");//26
            $table->string("bank");//27
            $table->string("account_holder"); //28
            $table->integer("account_number");//29
            $table->string("description_request")->nullable();//30
            $table->string('confirmationCheckbox');//31
            $table->integer('request_number');//31
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_form');
    }
};
