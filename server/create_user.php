<?php
require('conector.php');
$con = new ConectorBD('localhost','root','123456789');

if ($con->initConexion('agenda')=='OK') {

    $datos['nombre'] = "'jonathan'";
    $datos['email'] = "jonathan@gmail.com";
    $datos['password'] = password_hash("123",PASSWORD_DEFAULT);
    $datos['fecha_nacimiento'] = "92/08/02";
    $con->insertData('usuarios', $datos);

    $datos['nombre'] = "pedro";
    $datos['email'] = "pedro@gmail.com";
    $datos['password'] = password_hash("123",PASSWORD_DEFAULT);
    $datos['fecha_nacimiento'] = "87/08/02";
    $con->insertData('usuarios', $datos);

    $datos['nombre'] = "camilo";
    $datos['email'] = "camilo@gmail.com";
    $datos['password'] = password_hash("123",PASSWORD_DEFAULT);
    $datos['fecha_nacimiento'] = "67/08/02";

    if ($con->insertData('usuarios', $datos)) {
      echo "Se insertaron los datos correctamente";
    }else echo "Se ha producido un error en la inserción";

    $con->cerrarConexion();

  }else {
    echo "Se presentó un error en la conexión";
  }


 

 ?>
