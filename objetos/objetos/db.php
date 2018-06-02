<?php

  require_once "usuario.php";

  abstract class DB{
    // public abstract function traerTodos();
    public abstract function guardar(Usuario $usuario);
  }
 ?>
