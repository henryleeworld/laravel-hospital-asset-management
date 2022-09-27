<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('hospital_id')->nullable();
            $table->foreign('hospital_id', 'hospital_fk_1230947')->references('id')->on('hospitals');
        });

    }
};
