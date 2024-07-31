<?php

$title = "Главная";

// Начало буферизации вывода
ob_start();
include "view/pages/home.php";

$content = ob_get_clean();

include "view/layout.php";
