<?php
namespace App\Infastuture;

use App\User;

class UserModel{

    public function __construct()
    {

    }

    public function Find($email ){
      try {
          //code...
          $user = User::where('email',$email)->get();
          if($user != null){
              return true;
          }
          return false;
      } catch (\Throwable $th) {
          //throw $th;
          return false;
      }
    }

    public function FindbyId($id){
        try {
            //code...
            $user = User::find($id);
            if($user != null){
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            //throw $th;
            return false;
        }
      }



}
