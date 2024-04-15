<?php
    require_once '../models/user.php';
    require_once '../bd/batabase.php';
    require_once '../interfaces/userInterface.php';

    class UserService implements userInterface {
        private $db;
        
        public function __contruct ($db) {
            $this->db = $db;
        }

        public function registrarUsuario($usuario){
            $nombre = $usuario->getNombre;
            $apaterno = $usuario->getApaterno;
            $amaterno = $usuario->getAmaterno;
            $direccion = $usuario->getDireccion;
            $telefono = $usuario->getTelefono;
            $correo = $usuario->getCorreo;
            $usuario = $usuario->getUsuario;
            $password = password_hash(usuario->getPassword(), PASSWORD_DEFAULT);

            $sql_insertar = "INSERT INTO usuarios (id, nombre, apaterno, amaterno, direccion, telefono, correo, usuario, password) 
            VALUES (null, '$nombre', '$apaterno', '$amaterno', '$direccion', '$telefono', '$correo', '$usuario', '$password')";

            if($this->db->query($sql_insertar) === TRUE) {
                return true;
            }
            else{
                return false;
            }
        }
    }

?>