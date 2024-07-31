<?php
$title = "Контакты";

ob_start();
$form_action = "/save.php";

include "view/pages/book.php";
include "view/form.php";

$content = ob_get_clean();

include "view/layout.php";
