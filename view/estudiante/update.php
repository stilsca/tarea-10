<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startups_errors', 1);
    include_once($_SERVER['DOCUMENT_ROOT'].'/tallerphp18/routes.php');
    
    require_once(MODEL_PATH.'estudianteModel.php');
    $object = new estudianteModel();

    $idEstudiante = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $idCurso = $_REQUEST['idCiudad'];
    
    $object->update($idEstudiante,$nombre,$apellido,$idCiudad);

?>