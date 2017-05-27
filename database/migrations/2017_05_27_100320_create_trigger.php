<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER rating_cnt AFTER INSERT ON `comments` FOR EACH ROW
            BEGIN
                update users as a 
                    set a.rating=(select avg(b.rating) from comments as b
                    group by b.id_from having b.id_from=new.id_from)
                    where new.id_from=a.id;
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
        DB::unprepared('DROP TRIGGER `rating_cnt`');
    }
}
