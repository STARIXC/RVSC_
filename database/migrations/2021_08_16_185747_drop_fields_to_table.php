<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropFieldsToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropColumn('max_adult');
            $table->dropColumn('max_child');
            $table->dropColumn('pests_allowed');
            $table->dropColumn('no_of_beds');
            $table->dropColumn('room_image');
            $table->dropColumn('category_image');
            $table->dropColumn('price_double');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            //
        });
    }
}
