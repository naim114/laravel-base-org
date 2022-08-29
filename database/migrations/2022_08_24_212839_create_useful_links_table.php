<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsefulLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'useful_links',
            'address',
            'email',
            'phone',
            'twitter',
            'facebook',
            'instagram',
            'linkedin',
            function (Blueprint $table) {
                $table->id();
                $table->string('display_name');
                $table->string('url');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('useful_links');
    }
}
