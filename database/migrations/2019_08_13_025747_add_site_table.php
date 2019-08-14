<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('total', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->integer("total");
        });
        Schema::create('bottom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string("bottom",100);
        });
        Schema::create('ad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string("text",150);
            $table->string("sh",10);
        });
        Schema::create('mvim', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string("file",150);
            $table->string("sh",10);
        });
        Schema::create('image', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string("file",150);
            $table->string("sh",10);
        });
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->text("text");
            $table->string("sh",10);
        });
        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string("acc",20);
            $table->string("pw",20);
        });
        Schema::create('menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string("text",20);
            $table->string("href",20);
            $table->string("sh",10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('total');
      Schema::dropIfExists('bottom');
      Schema::dropIfExists('mvim');
      Schema::dropIfExists('image');
      Schema::dropIfExists('news');
      Schema::dropIfExists('ad');
      Schema::dropIfExists('admin');
      Schema::dropIfExists('menu');
    }
}
