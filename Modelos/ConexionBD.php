<?php

class ConexionBD{

    public function cBD(){

        $bd = new PDO("mysql:host=localhost;dbname=emunahed_instituto", "emunahed_admin", "Leondejuda1993");

        $bd -> exec("set names utf8");

        return $bd;
    }
}

?>