<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('logo')->nullable();
            $table->string('mobile')->nullable();
            $table->string('mobile_2')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->text('google_map')->nullable();
            $table->text('custom_script')->nullable();
            $table->text('custom_style')->nullable();
            $table->string('pay_us_link')->nullable();
            $table->text('link_1_name')->nullable();
            $table->text('link_1_url')->nullable();
            $table->text('link_2_name')->nullable();
            $table->text('link_2_url')->nullable();
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
        Schema::dropIfExists('setting')->nullable();
    }
}
