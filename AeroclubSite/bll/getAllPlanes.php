<?php
session_start();

if(!empty($_SESSION['login'])){
    
    require_once "../dal/class.data.avion.php";
    
    $planes = new Avion();
    
    $planes = $planes->getAllPlanes();
    
    echo json_encode($planes);
}