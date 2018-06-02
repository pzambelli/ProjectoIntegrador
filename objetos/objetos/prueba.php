<?php

  require_once "usuario.php";
  require_once "dbJSON.php";

  $usuario = new Usuario("Usuario01","123456", null, null, "../imagenes/descarga.jpg");
  $json = new JSON;

  $json->guardar($usuario);

  var_dump($usuario);
