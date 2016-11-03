<?php

/**
 * registerControl short summary.
 *
 * registerControl description.
 *
 * @version 1.0
 * @author VietBac
 */
namespace MVC\Control;
use core\data\model\pdoData;
require_once("core/data/pdoData.php");
require_once("MVC/model/ModelRegister.php");
require_once("MVC/view/RespondRegister.php");
class ControlRegister
{
        public function __construct(){}

        public function Regist_User($userName,$passWord,$email){
            $model = new \MVC\Model\ModelRegister();
            $state = $model->insert_user($userName,$passWord,$email);
            $model->add_new_home($userName);
            $model->add_new_device_home($userName);
            $model->add_new_device($userName,"gasleaksensor");
            $view = new \MVC\view\RespondRegister($state);
            $view->createView();
        }
        public function insert_new_user_mqtt($userName,$passWord){
            shell_exec('C:\\mqttsever\\mosquitto\\mosquitto_passwd.exe 2>&1 -b C:\\mqttsever\\mosquitto\\pwfile '.$userName.' '.$passWord);
        }   
        public function insert_new_acl_user_mqtt($userName,$type){
            $file = fopen('C:\\mqttsever\\mosquitto\\aclfile','a');
            fwrite($file,'user '.$userName."\n");
            fwrite($file,'topic '.$type.' topic/'.$userName."\n");
            fclose($file);
        }

}