<?php
    class User () {
        private $id;
        private $nombre;
        private $aparterno;
        private $amaterno;
        private $direccion;
        private $telefono;
        private $correo;
        private $usuario;
        private $password;

        // Creación del constructor de la clase
        public function __contruct($nombre, $apaterno, $amaterno, $direccion, $telefono, $correo, $usuario, $password){
            $this->nombre = $nombre;
            $this->apaterno = $aparterno;
            $this->amaterno = $amaterno;
            $this->direccion = $direccion;
            $this->telefono = $telefono;
            $this->correo = $correo;
            $this->usuario = $usuario;
            $this->password = $password;
        }

        //  Getters y setters para cada una de las propiedades
        public function getId () {
            return $this->id;
        }

        public function setId () {
            $this->id = $id;
        }

        public function getNombre () {
            return $this->nombre;
        }

        public function setNombre () {
            $this->nombre = $nombre;
        }

        public function getApaterno () {
            return $this->apaterno;
        }

        public function setApaterno () {
            $this->apatern0 = $apaterno;
        }

        public function getAmaterno () {
            return $this->amaterno;
        }

        public function setAmaterno () {
            $this->amaterno = $amaterno;
        }

        public function getDireccion () {
            return $this->direccion;
        }

        public function setDireccion () {
            $this->direccion = $direccion;
        }

        public function getTelefono () {
            return $this->telefono;
        }

        public function setTelefono () {
            $this->telefono= $telefono;
        }

        public function getCorreo () {
            return $this->correo;
        }

        public function setCorreo () {
            $this->correo = $correo;
        }

        public function getUsuario () {
            return $this->usuario;
        }

        public function setUsuario () {
            $this->usuario = $usuario;
        }

        public function getPassword () {
            return $this->password;
        }

        public function setPassword () {
            $this->password = $password;
        }
    }
?>