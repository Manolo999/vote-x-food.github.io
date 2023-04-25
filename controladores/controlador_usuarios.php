<?php

include_once("modelos/usuario.php");
include_once("modelos/conexion.php");

BD::crearInstancia();

class ControladorUsuarios{

    public function login(){

        $usuarios=Usuario::consultar();
    
        include_once("vistas/usuarios/login.php");
    }
    
    
    public function registro(){
    
        $usuarios=Usuario::consultar();

        include_once("vistas/usuarios/registro.php");
    }
    
    public function crear(){

        if ($_POST) {

            print_r($_POST);
            $nombre=$_POST["nombre"];
            $documento=$_POST["documento"];
            $correo=$_POST["correo"];
            $clave=$_POST["clave"];
            Usuario:: crear ($nombre, $documento, $correo, $clave);
            header("Location:./?controlador=paginas&accion=inicio" );
        }
        include_once("vistas/usuarios/crear.php");

    }   

    public function editar(){  



        if($_POST){
            $id=$_POST['id'];
            $nombre=$_POST["nombre"];
            $documento=$_POST["documento"];
            $correo=$_POST["correo"];
            $clave=$_POST["clave"];

            Usuario::editar($id, $nombre, $documento, $correo, $clave);
            header("Location:./?controlador=usuarios&accion=registro" );
         
        }

        $id=$_GET['id'];
 
        $usuario=(Usuario::buscar($id));
        
        
        include_once("vistas/usuarios/editar.php");

    }

    public function borrar(){
        print_r("completado con exito" );
            $id=$_GET['id'];

        Usuario::borrar($id);
        header("Location:./?controlador=usuarios&accion=registro" );

    }

    /*
    static public function mostrarRegistro(){
        $tabla= "registro";
        $respuesta= ModeloFormularios::mdlselecionarRegistro($tabla);
        return $respuesta;


    }

    public function ingreso(){
        if ($_POST) {
            $tabla = "registro";
            $columna = "correo";
            $valor= $_POST["correo"];
            $respuesta = Usuario::mdlselecionarRegistro($tabla,$columna,$valor)

            if ($respuesta["correo"]==$_POST["correo"] && $respuesta["clave"]==$_POST["clave"] ){

                echo '<script>
                    if(
                        </script> 
            } 
        }


    }
    */
}
