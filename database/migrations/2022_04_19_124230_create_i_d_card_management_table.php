<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIDCardManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_d_card_management', function (Blueprint $table) {
            $table->id();
            $table->string('id_card_number');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->unsignedBigInteger('individual_id')->nullable();
            $table->unsignedBigInteger('template_id')->nullable();
            $table->string('name');
            $table->string('passport');
            $table->string('path');
            $table->string('role')->nullable();
            $table->string('issued_date');
            $table->enum('status', ['Pending', 'Declined', 'Approved'])->default('Pending');
            $table->string('created_by');
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
        Schema::dropIfExists('i_d_card_management');
    }
}
