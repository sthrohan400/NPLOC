<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('profile_image');
            $table->string('password');
            $table->boolean('verified');
            $table->boolean('status');
            $table->datetime('last_login');
            $table->string('reset_token',90);
            $table->datetime('reset_token_expiry');
            $table->string('google2fa_secret_token');
            $table->boolean('2fa_enabled')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('users_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->integer('roles_id');
        });
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',80);
            $table->string('descr');
            $table->boolean('status');
            $table->boolean('hold');
            $table->timestamps();
			$table->softDeletes();
        });
        Schema::create('roles_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('permissions_id');
            $table->integer('roles_id');
        });
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',80);
            $table->string('namespace');
            $table->string('name');
            $table->boolean('status');
            $table->boolean('hold');
            $table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('users_roles');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('roles_permissions');
        Schema::dropIfExists('permissions');
    }
}
