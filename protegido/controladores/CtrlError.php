<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CtrlError
 *
 * @author JAKO
 */
class CtrlError extends CControlador{
    public function accion500(){
        $this->vista("error_500");
    }
}
