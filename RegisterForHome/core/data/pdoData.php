<?php

/**
 * pdoData short summary.
 *
 * pdoData description.
 *
 * @version 1.0
 * @author VietBac
 */
namespace core\data\model;
use \PDO;

class pdoData
{
    private $database=null;
    //tao ket noi
    public function __construct($userName,$passWord){
        try{
            $serverName = "localhost";
            $databaseName = "mydb";
            $this->database = new PDO("mysql:host=$serverName;dbname=$databaseName;charset=utf8",$userName,$passWord);
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
    //huy ket noi
    public function __destruct(){
        try{
            $this->database=null;
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }

    }
    //Thuc hien select ; tra ve la cac ban ghi
    public function doQuery($stmtQuery){
        $ret = array();

        try {
            $stmt = $this->database->query($stmtQuery);
            if ($stmt) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $ret[] = $row;
                }
            }
        } catch(PDOException $ex) {	echo $stmtQuery; }

        return $ret;
    }
    //Thuc hien insert, update, delete ; tra ve so ban ghi
    public function doData($stmtData){
        $numberRowEffecient = 0;
        try{
            $numberRowEffecient=$this->database->exec($stmtData);
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
            $numberRowEffecient=-1;
        }
        return $numberRowEffecient;
    }

}