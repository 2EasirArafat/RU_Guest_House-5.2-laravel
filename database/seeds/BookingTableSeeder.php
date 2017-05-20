<?php

use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                 DB::table('bookings')->insert(

            [
                ['name'=>'john','user_id'=>'1','salaryID'=>'700000','designation'=>'Teacher','department'=>'CSE','email'=>'john@clivern.com','arriving_date'=>'12-05-2017','leaving_date'=>'14-05-2017','status'=>'empty'],

                ['name'=>'mark','user_id'=>'2','salaryID'=>'900000','designation'=>'Teacher','department'=>'ICE','email'=>'arafat@clivern.com','arriving_date'=>'13-05-2017','leaving_date'=>'14-05-2017','status'=>'empty'],

                ['name'=>'Karl','user_id'=>'3','salaryID'=>'800000','designation'=>'Teacher','department'=>'CSE','email'=>'najmul@clivern.com','arriving_date'=>'11-05-2017','leaving_date'=>'14-05-2017','status'=>'empty'],

            ]

            );

    }
}
