<?php
  require_once "db.php";
  require_once "usuario.php";


    class JSON extends DB{

      public function guardar(Usuario $usuario){

        $jsonUser = json_encode($usuario);

        $fp = fopen("../userData.json", "a+");
        $bytesEscritos = fwrite($fp, $jsonUser . PHP_EOL);
        fclose($fp);

        return $bytesEscritos;
      }

      public function buscarUsuario(Usuario $nombreDeUsuario){
        $fp = fopen("../userData.json", "r");

        if ($fp){
            while (($linea = fgets($fp)) !== false) {
                $user = json_decode($linea);
                if($user["username"] == $nombreDeUsuario) {
                return $user;
                }
            }
            return false;
        }
        fclose($fp);
      }

    }
 ?>
