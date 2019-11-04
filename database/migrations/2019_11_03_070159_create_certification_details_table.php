<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certification_details', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('USN');
            $table->string('StudentName');
            $table->string('CourseName');
            $table->string('CourseProvider');
            $table->integer('Sem');
            $table->longText('Description');
            $table->integer('Duration');
            $table->string('Status');
            $table->date('BeginDate');
            $table->date('EndDate');
            $table->string('CertificateLink');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certification_details');
    }
}
