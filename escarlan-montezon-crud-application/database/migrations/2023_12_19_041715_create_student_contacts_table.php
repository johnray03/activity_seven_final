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
        Schema::create('student_contacts', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("student_number");
            $table->string("lastname");
            $table->string("firstname");
            $table->string("middlename");
            $table->string("course");
            $table->string("email");
            $table->string("contact_number");
            $table->string("address");
            $table->string("parent");
            $table->string("parent_contact");
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
        Schema::dropIfExists('student_contacts');
    }
};
