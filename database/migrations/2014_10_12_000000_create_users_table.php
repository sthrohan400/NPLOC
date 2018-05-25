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
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->enum('membership_type',['free','monthly','yearly']);
            $table->enum('gender',['male','female','other']);
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('profile_image')->nullable();
            $table->string('password');
            $table->boolean('verified');
            $table->boolean('status');
            $table->datetime('last_login')->nullable();
            $table->string('reset_token',90)->nullable();
            $table->datetime('reset_token_expiry')->nullable();
            $table->string('google2fa_secret_token')->nullable();
            $table->datetime('user_expiry_date')->nullable();
            $table->boolean('2fa_enabled')->default(0);
            $table->softDeletes();
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
