<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAttributesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('phone')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('status')->comment('0: inactive | 1: active| 2:admin block');
            $table->integer('address')->nullable();
            $table->integer('role_id')->comment('1: admin | 2: member');
            //
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
            $table->dropColumn('phone');
            $table->dropColumn('avatar');
            $table->dropColumn('status');
            $table->dropColumn('address');
            $table->dropColumn('role_id');
        });
    }
}
