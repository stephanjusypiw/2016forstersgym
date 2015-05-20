<?php


use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run() {
        // empty the table
        User::truncate();
        // create 4 users
        User::create( [
            'name' => 'John lennon' ,
            'email' => 'john@beatles.com' ,
            'password' => Hash::make( 'password' )
        ] );

        User::create( [
            'name' => 'Paul MacCartney' ,
            'email' => 'paul@beatles.com' ,
            'password' => Hash::make( 'password' )
        ] );

        User::create( [
            'name' => 'George Harrison' ,
            'email' => 'george@beatles.com' ,
            'password' => Hash::make( 'password' )
        ] );

        User::create( [
            'name' => 'Ringo Starr' ,
            'email' => 'ringo@beatles.com' ,
            'password' => Hash::make( 'password' )
        ] );
    }
}