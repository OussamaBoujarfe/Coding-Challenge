<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnIsSellerUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('Buyer');
            $table->string('fname')->default('NotObligatory');
            $table->string('lname')->default('NotObligatory');
            $table->string('sname')->default('NotObligatory');
            $table->string('surl')->default('NotObligatory');
            $table->string('phone')->default('0000000000');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->dropColumn('role');
           $table->dropColumn('fname');
           $table->dropColumn('lname');
           $table->dropColumn('sname');
           $table->dropColumn('surl');
           $table->dropColumn('phone');

        });
    }
}
