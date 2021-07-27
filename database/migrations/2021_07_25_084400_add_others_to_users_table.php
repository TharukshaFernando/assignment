<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOthersToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name')->after('name')->nullable();
            $table->string('user_name')->after('email')->nullable();
            $table->string('address')->after('user_name')->nullable();
            $table->string('nic')->after('password')->nullable();
            $table->string('tel')->after('nic')->nullable();
          

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
            $table->dropColumn('last_name');
            $table->dropColumn('user_name');
            $table->dropColumn('address');
            $table->dropColumn('nic');
            $table->dropColumn('tel');
        });
    }
}
