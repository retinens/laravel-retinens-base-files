<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name','first_name');
            $table->string('last_name');
            $table->string('type')->default('user');
            $table->timestamp('last_login_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('first_name','name');
            $table->dropColumn('last_name');
            $table->dropColumn('type');
            $table->dropColumn('last_login_at');
        });
    }
};
