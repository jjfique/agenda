<?php


class Conexion {
    private $host;
    private  $user;
    private   $password ;
    private  $nombre_db;

    protected $conexion_db;
    public function Conexion(){
        $this->conexion_db = new mysqli($this->host, $this->user, $this->password,$this->nombre_db);
        if ($this->conexion_db->connect_error) {
            return "Error:" . $this->conexion->connect_error;
          }else {
            return "OK";
          }

    }

    
}


?>