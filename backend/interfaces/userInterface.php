<?php
    interface UsarInterface{
        public funtion registrarUsuario($usuario);
        public funtion login($usuario, $password);
        public funtion actualizarUsuario($usuario);
        public funtion borrarUsuario($id);
        public funtion obtenerUsuarioPorId($id);
        public funtion obtenerUsuarioPorCorreo($correo);
        public funtion obtenerTodosLosUsuarios();
    }
?>