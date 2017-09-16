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
             DB::table('users')->insert(

        [
             ['name'=>'mark','email'=>'mark@clivern.com','password'=>'mark','type'=>0],
             ['name'=>'Karl','email'=>'karl@clivern.com','password'=>'karl', 'type'=>0],
             ['name'=>'marl','email'=>'marl@clivern.com','password'=>'marl', 'type'=>0],
             ['name'=>'mary','email'=>'mary@clivern.com','password'=>'mary', 'type'=>0],
             ['name'=>'sels','email'=>'sels@clivern.com','password'=>'sels', 'type'=>0],
             ['name'=>'taylor','email'=>'taylor@clivern.com','password'=>'taylor', 'type'=>0],

        ]);

        DB::table('users')->insert([

            
             'name'=>'admin',
             'email'=>'admin@gmail.com',
             'password'=> bcrypt('@admin'),
             'type'=>1,
                ]);

            



    }
}
