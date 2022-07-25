<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->String('auctiontittle');
            $table->String('content');
            $table->String('price');
            $table->date('auction_start_date');
            $table->date('auction_end_date');
            $table->String('item_specifics');
            $table->String('category');
            $table->String('vendor_name');
            $table->String('featured_image');
            $table->String('tag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auctions');
    }
};
