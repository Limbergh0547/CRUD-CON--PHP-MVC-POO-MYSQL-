<?php
    $ruta = $_SERVER["DOCUMENT_ROOT"]."/Proyectos/CRUD-CON-[PHP-MVC-POO-MYSQL]/";
    require_once("$ruta/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre']);
?>