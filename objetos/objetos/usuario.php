<?php

  class Usuario{

    private $nombre;
    private $apellido;
    private $usuario;
    private $password;
    private $avatar;

    public function __construct($usuario, $password, $nombre = null, $apellido = null, $avatar = "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"){

      $this->usuario = $usuario;
      $this->password = $this->encriptar($password);
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
      return $this->apellido;
    }

    public function getUsuario(){
      return $this->usuario;
    }

    public function getPassword(){
      return $this->password;
    }

    public function getAvatar(){
      return $this->avatar;
    }


    public function encriptar($password){
      return password_hash($password, PASSWORD_BCRYPT);
    }

    public function guardarAvatar($avatar){

      if (is_array($avatar)) {

          $nombre = $avatar["name"];
          $archivo = $avatar["tmp_name"];
          $ext = pathinfo($nombre, PATHINFO_EXTENSION);

          $direccion = dirname(__FILE__);
          $direccion = $miArchivo ."/imagenes/avatars/";
          $direccion = $miArchivo . $this->usuario . "_profile" .  $ext;

          $movido = move_uploaded_file($archivo, $direccion);

          $avatar = $direccion;
      }

    }
    
  }
 ?>
