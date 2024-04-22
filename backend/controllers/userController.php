<?php
    require_once '../services/userService.php';

    class UserController{
        private $userService;

        public function __contruct(){
            $db = (new Database()) -> getConnection();
            $this->userService = new UserService($db);
        }

        public function login(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $usuario = $_POST[usuario];
                $password = $_POST['password'];

                if(!empty($usuario) && !empty($password)){
                    $user = $this->userService->login($usuario, $password);
                    if($user){
                        //Redirigir a otra página
                        echo json_encode(array("success" => true),
                        "message" => "Inicio satisfactorio");
                    }
                    else{
                        echo json_encode(array("success" => false),
                        "message" => "Credenciales incorrectas");
                    }
                }
                else{
                    echo json_encode(array("success" => false),
                    "message" => "Faltan Datos");
                }
            }
            else{
                echo json_encode(array("success" => false),
                    "message" => "Tipo de petición incorrecta");
            }
        }
    }
?>