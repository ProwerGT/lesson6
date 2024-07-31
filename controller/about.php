<?php

$title = "О нас";


// Начало буферизации вывода

ob_start();
include "view/pages/about.php";

$content = ob_get_clean();

include "view/layout.php";