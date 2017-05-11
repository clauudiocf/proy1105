<?php

class Conexion{
    var $objconn;
    var $dbust = "root";
    var $dbpwd = "avaras08";
    var $dbhost = "localhost";
    var $dbname = "exportaciones";
public function Conectar(){
    $this->objconn =new mysqli($this->dbhost,  $this->dbust, $this->dbpwd, $this->dbname);
        if($this->objconn->connect_errno){
            return "Fallo al conectar a MySQL: (" .$this->objconn->connect_errno.")".$this->objconn->connect_errno;
        }
        return true;
    }
}