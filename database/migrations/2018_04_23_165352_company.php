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
            $table->string('title');
			$table->string('name');
            $table->string('email');
            $table->string('addr1');
            $table->string('addr2');
            $table->text('descr1');
            $table->text('descr2');
            $table->text('descr3');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('logo');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keywords');
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
        Schema::drop('company');
        Schema:drop('company_info');
    }
}
