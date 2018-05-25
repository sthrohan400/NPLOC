<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateTrail extends Migration
{
    public function up()
    {
        Schema::create('languages', function(Blueprint $table) {
             $table->increments('id');
             $table->integer('company_id');
             $table->string('name');
             $table->string('code')->unique();
             $table->timestamps();
             $table->softDeletes();
        });

        Schema::create('trails', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->integer('lang_id');
            $table->string('name');
            $table->string('short_descr')->nullable();
            $table->boolean('is_up')->default(0);
            $table->text('descr');
            $table->text('descr2')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->softDeletes();

        });
        Schema::create('trail_files', function(Blueprint $table) {
            $table->increments('id');
           
            $table->integer('trails_id')->nullable();
            $table->integer('spots_id')->nullable();
            $table->string('path');
            $table->enum('type',['video','audio','image','documents']);
            $table->string('title');
            $table->string('short_descr')->nullable();
            $table->text('descr');
            $table->timestamps();
            $table->softDeletes();

        });
        Schema::create('facilities', function(Blueprint $table) {
             $table->increments('id');
             $table->integer('lang_id');
             $table->integer('company_id');
             $table->string('name');
             $table->string('short_descr')->nullable();
             $table->string('icon');
             $table->boolean('status')->default(0);
             $table->timestamps();
             $table->softDeletes();
        });

        Schema::create('spots', function(Blueprint $table) {
             $table->increments('id');
             $table->integer('lang_id');
             $table->enum('type',['facillities','default']);
             $table->string('name');
             $table->string('short_descr')->nullable();
             $table->text('descr');
             $table->decimal('lat',10,8);
             $table->decimal('long',11,8);
             $table->boolean('status')->default(0);
             $table->timestamps();
             $table->softDeletes();
        });
         Schema::create('trails_spots', function(Blueprint $table) {
             $table->increments('id');
             $table->boolean('is_notifiable')->default(0);
             $table->integer('order_num');
             $table->integer('trails_id');
             $table->integer('spots_id');
             $table->timestamps();
             $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('languages');
        Schema::dropIfExists('trails');
        Schema::dropIfExists('facillities');
        Schema::dropIfExists('trail_files');
        Schema::dropIfExists('spots');
        Schema::dropIfExists('trails_spots');
    }
}
