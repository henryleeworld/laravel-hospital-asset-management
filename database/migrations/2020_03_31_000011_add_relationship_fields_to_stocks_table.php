<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('stocks', function (Blueprint $table) {
            $table->unsignedInteger('asset_id');
            $table->foreign('asset_id', 'asset_fk_1230965')->references('id')->on('assets');
            $table->unsignedInteger('hospital_id')->nullable();
            $table->foreign('hospital_id', 'hospital_fk_1230970')->references('id')->on('hospitals');
        });

    }
};
