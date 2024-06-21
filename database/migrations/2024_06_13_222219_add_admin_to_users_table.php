<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdminToUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Commenting out this code as the 'admin' column already exists
        /*
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('admin')->default(false);
        });
        */
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('admin');
        });
    }
}
