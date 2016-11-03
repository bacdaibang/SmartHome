<?php

/**
 * RegistRequest short summary.
 *
 * RegistRequest description.
 *
 * @version 1.0
 * @author VietBac
 */
require_once("MVC/control/ControlRegister.php");
$registUser = new \MVC\Control\ControlRegister();
$userName = strval($_GET['u']);
$passWord = strval($_GET['p']);
$email = strval($_GET['e']);
$registUser->Regist_User($userName,$passWord,$email);
$registUser->insert_new_user_mqtt($userName,$passWord);
$registUser->insert_new_acl_user_mqtt($userName,'readwrite');