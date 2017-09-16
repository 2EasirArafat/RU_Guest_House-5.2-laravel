<?php

use Illuminate\Database\Seeder;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                    DB::table('roomtypes')->insert(

            [

                ['room_category'=>'SMALL','room_capacity'=>'1'],
                ['room_category'=>'MEDIUM','room_capacity'=>'2'],
                ['room_category'=>'LARGE','room_capacity'=>'3'],
                ['room_category'=>'EXTRA LARGE','room_capacity'=>'4'],
            ]


                                            );

    }
}
