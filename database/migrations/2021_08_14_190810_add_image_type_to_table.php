<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageTypeToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_images', function (Blueprint $table) {
            $table->string('image_type');
            $table->dropColumn('gallery');
            $table->dropColumn('events_page');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_images', function (Blueprint $table) {
            //
        });
    }
}
