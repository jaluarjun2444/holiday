<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_master', function (Blueprint $table) {
            $table->id();
            $table->string('destination_id');
            $table->string('region_id');
            $table->text('name');
            $table->text('description');
            $table->text('main_image');
            $table->string('price');
            $table->string('duration_day');
            $table->string('duration_night');
            $table->string('star_rating');
            $table->string('status');
            $table->string('views');
            $table->string('created_by');
            $table->softDeletes();
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
        Schema::dropIfExists('package_master');
    }
}
