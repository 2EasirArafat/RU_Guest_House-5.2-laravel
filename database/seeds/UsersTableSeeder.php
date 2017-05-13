<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('users')->insert(array(
             array('name'=>'john','email'=>'john@clivern.com','password'=>'john'),
             array('name'=>'mark','email'=>'mark@clivern.com','password'=>'mark'),
             array('name'=>'Karl','email'=>'karl@clivern.com','password'=>'karl'),
             array('name'=>'marl','email'=>'marl@clivern.com','password'=>'marl'),
             array('name'=>'mary','email'=>'mary@clivern.com','password'=>'mary'),
             array('name'=>'sels','email'=>'sels@clivern.com','password'=>'sels'),
             array('name'=>'taylor','email'=>'taylor@clivern.com','password'=>'taylor'),

          ));



             DB::table('roomtypes')->insert(array(
             array('room_category'=>'small','room_capacity'=>'1'),
             array('room_category'=>'large','room_capacity'=>'3'),
             array('room_category'=>'medium','room_capacity'=>'2'),
             array('room_category'=>'extra_large','room_capacity'=>'4'),
          ));





             DB::table('rooms')->insert(array(
             array('room_name'=>'Delax','room_status'=>'empty'),
             array('room_name'=>'Green_rooom','room_status'=>'booked'),
             array('room_name'=>'Luxarious','room_status'=>'booked'),
             array('room_name'=>'Beautiful','room_status'=>'empty'),

          ));


              DB::table('bookings')->insert(array(
             array('name'=>'john','salaryID'=>'700000','designation'=>'Teacher','department'=>'CSE','email'=>'john@clivern.com','arriving_date'=>'12-05-2017','leaving_date'=>'14-05-2017','status'=>'empty'),

             array('name'=>'Arafat','salaryID'=>'900000','designation'=>'Teacher','department'=>'ICE','email'=>'arafat@clivern.com','arriving_date'=>'13-05-2017','leaving_date'=>'14-05-2017','status'=>'empty'),

             array('name'=>'najmul','salaryID'=>'800000','designation'=>'Teacher','department'=>'CSE','email'=>'najmul@clivern.com','arriving_date'=>'11-05-2017','leaving_date'=>'14-05-2017','status'=>'empty'),

          ));


              DB::table('booking_details')->insert(array(
             array('booking_date'=>'12-05-2017'),
             array('booking_date'=>'13-05-2017'),
             array('booking_date'=>'11-05-2017'),
             array('booking_date'=>'11-05-2017'),
             array('booking_date'=>'15-05-2017'),
             

          ));



    }
}
