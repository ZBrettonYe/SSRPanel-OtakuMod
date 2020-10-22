<?php

use Illuminate\Database\Migrations\Migration;
use App\Models\Config;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStripConfig extends Migration
{
    protected $configs = [
        'stripe_public_key',
        'stripe_secret_key',
        'stripe_signing_secret',
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach($this->configs as $config){
            Config::insert(['name' => $config]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Config::destroy($this->configs);
    }
}
