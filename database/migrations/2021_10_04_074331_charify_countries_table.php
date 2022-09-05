<?php

use Illuminate\Database\Migrations\Migration;

class CharifyCountriesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::table(\Config::get('countries.table_name'), function ($table) {
            DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " ALTER COLUMN country_code TYPE CHAR(3) DEFAULT ''");
            DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " ALTER COLUMN iso_3166_2 TYPE CHAR(2) DEFAULT ''");
            DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " ALTER COLUMN iso_3166_3 TYPE CHAR(3) DEFAULT ''");
            DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " ALTER COLUMN region_code TYPE CHAR(3) DEFAULT ''");
            DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " ALTER COLUMN sub_region_code TYPE CHAR(3) DEFAULT ''");
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::table(\Config::get('countries.table_name'), function ($table) {
            DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " ALTER COLUMN country_code TYPE VARCHAR(3) DEFAULT ''");
            DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " ALTER COLUMN iso_3166_2 TYPE VARCHAR(2) DEFAULT ''");
            DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " ALTER COLUMN iso_3166_3 TYPE VARCHAR(3) DEFAULT ''");
            DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " ALTER COLUMN region_code TYPE VARCHAR(3) DEFAULT ''");
            DB::statement("ALTER TABLE " . DB::getTablePrefix() . \Config::get('countries.table_name') . " ALTER COLUMN sub_region_code TYPE VARCHAR(3) DEFAULT ''");
        });
    }
}