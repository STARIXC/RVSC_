<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteColumsToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('adult');
            $table->dropColumn('children');
            $table->dropColumn('roomtype');
            $table->dropColumn('guestname');
            $table->dropColumn('address');
            $table->dropColumn('city');
            $table->dropColumn('zipcode');
            $table->string('price_double');
            $table->string('price');
            $table->string('number_guest');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('member_number')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
}
