<?php
namespace Core\Modules;
use Core\Modules\Connect;
class User{

  public function __construct(){

  }
  public function login($userName,$password) {
    $connect = new Connect();
    $sql = "SELECT * FROM `Users` WHERE `username` = '$userName' AND `password` = '$password' ";
    $result = $connect->fetchOne($sql);
    return $result;
  }
}