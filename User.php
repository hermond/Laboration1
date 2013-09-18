<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hello World
 * Date: 2013-09-08
 * Time: 15:13
 * To change this template use File | Settings | File Templates.
 */

namespace model;


class User {

    private $CorrectUser = "axel";
    private $CorrectPassword = "losenord";
  //  private $User;
   //private $Password;
//    public function ___construct ($user, $password)
//    {
//        $this->User = $user;
//        $this->Password = $password;
//    }

    public function getUserName()
    {
        return $this->CorrectUser;
    }
    public function getPassword()
    {
        return $this->CorrectPassword;
    }

//    public function getLoginInfo()
//    {
//
//        if ($this->User == $this->CorrectUser && $this->Password == $this->CorrectPassword)
//        {
//            return 1;
//        }
//        else if ($this->User == $this->CorrectUser && $this->Password != $this->CorrectPassword)
//        {
//            return 2;
//        }
//        else if ($this->User != $this->CorrectUser && $this->Password == $this->CorrectPassword)
//        {
//            return 3;
//        }
//        else
//        {
//            return 4;
//        }
//
//
//    }



}