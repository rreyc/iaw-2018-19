<?php
if(isset($_POST["tarea"])){
    if(isset($_COOKIE["tareas"])){
        $tareas=unserialize($_COOKIE["tareas"]);
    }
    else{
        $tareas=array();
    }
    array_push($tareas,$_POST["tarea"]);
    setcookie("tareas",serialize($tareas),time()+60*60*24*7);
}
header("Location:index.php");

?>