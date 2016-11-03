<?php

/**
 * ControlRegister short summary.
 *
 * ControlRegister description.
 *
 * @version 1.0
 * @author VietBac
 */
namespace MVC\Model;
use core\data\model\pdoData;
require_once("core/data/pdoData.php");
class ModelRegister
{
    function __construct(){}

    public function insert_user($userName,$passWord,$email){
        $database = new pdoData('root','bacdaibang');
        $state = $database->doData('call insert_new_user(\''.$userName.'\',\''.$passWord.'\',\''.$email.'\')');
        $database = null;
        return $state;
    }
    public function add_new_home($userName){
        $database = new pdoData('root','bacdaibang');
        $state = $database->doData('call add_new_home(\''.$userName.'\')');
        $database = null;
        return $state;
    }
    public function add_new_device_home($userName){
        $database = new pdoData('root','bacdaibang');
        $state = $database->doData('call add_new_device_home(\''.$userName.'\')');
        $database = null;
        return $state;
    }
    public function add_new_device($userName,$nameDevice){
        $database = new pdoData('root','bacdaibang');
        $state = $database->doData('call add_new_device(\''.$userName.'\',\''.$nameDevice.'\')');
        $database = null;
        return $state;
    }

}