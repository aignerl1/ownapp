<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {
      $password = Hash::make('wald493#2');
      $user = new User();
      $usertype = 'admin';
      $user->password = $password;
      // $user->username = $usertype;
      $user->name = $usertype;
      $user->email_verified_at = now();
      $user->email = $usertype . '@htl-villach.at';
      $user->save();
     
      $user = new User();
      $usertype = 'editor';
      // $user->username = $usertype;
      $user->password = $password;
      $user->name = $usertype;
      $user->email_verified_at = now();
      $user->email = $usertype . '@htl-villach.at';
      $user->save();
     
      $user = new User();
      $usertype = 'user';
      $user->password = $password;
      // $user->username = $usertype;
      $user->name = $usertype;
      $user->email_verified_at = now();
      $user->email = $usertype . '@htl-villach.at';
      $user->save();
 
      //User mit kürzel
      $user = new User();
      $usertype = 'admin';
      // $user->username = $usertype;
      $user->password = 'password';
      $user->name = 'aignerl1';
      $user->email_verified_at = now();
      $user->email = 'aignerl1@htl-villach.at';
      $user->save();
 
      //favorite meal
      $user = new User();
      $usertype = 'user';
      // $user->username = $usertype;
      $user->password = 'password';
      $user->name = 'spaghetti';
      $user->email_verified_at = now();
      $user->email ='spaghetti@htl-villach.at';
      $user->save();
 
      //relative
      $user = new User();
      $usertype = 'editor';
      // $user->username = $usertype;
      $user->password = 'password';
      $user->name = 'elisabeth';
      $user->email_verified_at = now();
      $user->email = 'elisabeth@htl-villach.at';
      $user->save();
 
     
    }
}