<?php
    require_once "../fun/init.php";
    $conect = db_connect();
    // $query_1 = "SELECT nome FROM admin;";
    // $stmt_1 = $conect->prepare($query_1);
    // $stmt_1->execute();
    header ("Location: principal/inicio.php");
?>
