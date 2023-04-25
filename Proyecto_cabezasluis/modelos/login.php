<?php
class Usuario extends BD{

private $correo;
private $clave;

public function userExist($correo, $clave){
    //$mb5clave =mb5($clave);}

    $query=$this->$conexionBd->prepare("SELECT * FROM usuarios WHERE ?=correo and ?=clave");
    $query ->execute(['correo'=> $correo, 'clave' =>$clave]);

    if($query ->rowCount()){
        return true;
    }else{
        return false;
    }
}
public function setUser($correo){
    $query=$this->$conexionBd->prepare("SELECT * FROM usuarios WHERE ?=correo and ?=clave") 
    $query ->execute(['correo'=> $correo, 'clave' =>$clave]);
    
    foreach($query as $currentUser){
        $this->correo =$correo['correo'];
        $this->clave =$clave['clave'];
    }
}
public function getCorreo(){
    return $this->correo;
}
?>