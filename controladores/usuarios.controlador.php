<?php
require_once "modelos/usuarios.modelo.php";

class ControladorUsuarios{

   public function ctrIngresoUsuario(){
        if (isset($_POST["ingUsuario"])){
            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) && 
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){
                    $tabla = "usuarios";
                    $item = "usuario";
                    $valor = $_POST["ingUsuario"];
                    $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);


                    if(($respuesta["usuario"] == $_POST["ingUsuario"]) && ($respuesta["password"] == $_POST["ingPassword"])){

                        $_SESSION["iniciarSesion"]= "ok";
                        echo '<script> window.location = "inicio"; </script>';
                        // echo '<div class="alert alert-success">Se ha registrado exitosamente</div>';
                    }else{
                       echo '<div class="alert alert-danger">Error de usuario o contraseña, vuelva a ingresar</div>';
                    }
                    }
                }
            }
       }


