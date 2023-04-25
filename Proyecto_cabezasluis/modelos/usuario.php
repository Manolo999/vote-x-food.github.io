<?php

class Usuario{

    public $id;
    public $nombre;
    public $documento;
    public $correo;
    public $clave;

    public function __construct($id, $nombre, $documento, $correo, $clave) { 
        $this->id=$id;
        $this->nombre=$nombre;
        $this->documento=$documento;
        $this->correo=$correo;
        $this->clave=$clave;
    }

    public static function consultar(){
        $listaUsuarios=[];
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->query("SELECT * FROM usuarios");

        foreach ($sql->fetchAll() as $usuario){

            $listaUsuarios[] = new Usuario($usuario['id'],$usuario['nombre'],$usuario['documento'],$usuario['correo'],$usuario['clave']);
        } 
        return $listaUsuarios;
    }

    public static function crear($nombre, $documento, $correo, $clave){

        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("INSERT INTO usuarios(nombre, documento, correo, clave) VALUES(?,?,?,?)");
        $sql->execute(array($nombre, $documento, $correo, $clave));

    }

    //borrar registros//
    public static function borrar($id){
        
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("DELETE FROM usuarios WHERE id=?");
        $sql->execute(array($id));

    }

    public static function buscar($id){
        
        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare ("SELECT * FROM usuarios WHERE id=?");
        $sql->execute(array($id));
        $usuario=$sql->fetch();
        return new Usuario($usuario['id'],$usuario['nombre'],$usuario['documento'],$usuario['correo'],$usuario['clave']);

    }
    //editar redistro//
    public static function editar($id,$nombre, $documento, $correo, $clave){

        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("UPDATE usuarios SET nombre =?, documento=?, correo =?, clave=? WHERE id=?");
        $sql->execute(array($nombre, $documento, $correo, $clave, $id));


    }




}