<?php
require('conector.php');
$con = new ConectorBD('localhost','root','123456789');

if ($con->initConexion('agenda')=='OK') {

    $datos['NOMBRE'] = "andres";
    $datos['CORREO'] = "andres@gmail.com";
    $datos['CONTRASENA'] = password_hash("juan",PASSWORD_DEFAULT);
    $datos['FECHA_NACIMEINTO'] = "92/08/02";
    $con->insertData('usuarios', $datos);

    $datos['NOMBRE'] = "pedro";
    $datos['CORREO'] = "pedro@gmail.com";
    $datos['CONTRASENA'] = password_hash("juan",PASSWORD_DEFAULT);
    $datos['FECHA_NACIMEINTO'] = "87/08/02";
    $con->insertData('usuarios', $datos);

    $datos['NOMBRE'] = "camilo";
    $datos['CORREO'] = "camilo@gmail.com";
    $datos['CONTRASENA'] = password_hash("juan",PASSWORD_DEFAULT);
    $datos['FECHA_NACIMEINTO'] = "67/08/02";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se insertaron los datos correctamente";
    }else echo "Se ha producido un error en la inserción";

    $con->cerrarConexion();

  }else {
    echo "Se presentó un error en la conexión";
  }


 

 ?>
