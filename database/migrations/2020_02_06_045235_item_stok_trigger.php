<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItemStokTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::unprepared('
            CREATE OR REPLACE TRIGGER item_stock_trigger
            AFTER INSERT ON transaction_details
            FOR EACH ROW
            BEGIN
                CALL reduce_stok(NEW.id);
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
