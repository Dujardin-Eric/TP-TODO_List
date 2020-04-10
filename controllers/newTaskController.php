<?php

$categoryList = getAllCategories($pdo);
$statusList = getAllstatuses($pdo);

$pageTitle = "Nouvelle tâche";
$content = "newTask";

require "../views/baseLayout.php";