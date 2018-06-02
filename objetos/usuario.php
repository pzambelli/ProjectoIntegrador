<?php

  class Usuario{

    private $nombre;
    private $apellido;
    private $usuario;
    private $password;
    private $avatar;

    public function __construct($usuario, $password, $nombre = null, $apellido = null, $avatar = null){

      $this->usuario = $usuario;
      $this->password = $password;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->avatar = $avatar;

    }

    //SETTERS

    public function setNombre($nombre){
      $this->nombre = $nombre;
    }

    public function setApellido($apellido){
      $this->apellido = $apellido;
    }

    public function setUsuario($usuario){
      $this->usuario = $usuario;
    }

    public function setAvatar($avatar){
      $this->avatar = $avatar;
    }

    //GETTERS

    public function getNombre(){
      return $this->nombre;
    }

    public function getApellido(){

    }

    public function getUsuario(){

    }

    public function getPassword(){

    }

    public function getAvatar(){

    }
  }
 ?>
