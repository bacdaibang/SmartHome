<?php

/**
 * RespondRegist short summary.
 *
 * RespondRegist description.
 *
 * @version 1.0
 * @author VietBac
 */
namespace MVC\view;
class RespondRegister
{
    private $stateRegist;
    public function __construct($state){
        $this->stateRegist = $state;
    }
    public function createView(){
        if($this->stateRegist == 1)
            echo '<script>alert(\'Dang ki thanh cong\')</script>';
        else
            echo '<script>alert(\'Dang ki khong thanh cong\')</script>';
    }
}