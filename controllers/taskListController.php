<?php

//Requête sur la BD pour afficher la liste des tâches
$recordSET = $pdo->query("SELECT * FROM view_tasks");
$taskList = $recordSET->fetchAll();


$pageTitle = "liste des tâches";
$content = "taskList";

require "../views/baseLayout.php";