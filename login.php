<?php

session_start();

$passwords = array("chris"   => "ZXsDiRf.VBlWQ",
                   "Mwaba"   => "bQLXBRzdBci7M",
                   "philanid"   => "bQLXBRzdBci7M",
                   "LungileM"   => "bQLXBRzdBci7M",
                   "shelley" => "KkTH39mVsoclc",
                   "vanessa" => "69SvRIB9QVukk");

if (!$_POST["username"] or !$_POST["password"]) {
  echo "You must enter your username and password";
  exit;
}

$salt = substr($passwords[$_POST["username"]], 0, 2);
if (crypt($_POST["password"], $salt) 
         == $passwords[$_POST["username"]]) {
require 'edit.php';
#  echo "Login successful";
  $_SESSION["auth_username"] = $_POST["username"];
}
else {
  echo "Login incorrect";
}

?>
