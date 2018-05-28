<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('company', function(Blueprint $table) {
			$table->increments('id');
			$table->string('code');
			$table->string('site_token', 80);
			$table->datetime('subscription_expiry');
			$table->timestamps();
			$table->softDeletes();
            $table->string('gmap_token');
            $table->integer('allowed_referrals');
            $table->boolean('status');
            $table->boolean('hold');
        });
        Schema::create('company_info', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->string('title');
			$table->string('name');
            $table->string('email');
            $table->string('addr1')->nullable();
            $table->string('addr2')->nullable();
            $table->text('descr1')->nullable();
            $table->text('descr2')->nullable();
            $table->text('descr3')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2');
            $table->string('logo')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_logo')->nullable();
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
        //
        Schema::dropIfExists('company');
        Schema::dropIfExists('company_info');
    }
}
