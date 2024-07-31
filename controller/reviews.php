<?php

$title = "Отзывы";

$sql = 'SELECT * FROM contacts';

$statement = $pdo->query($sql);

$records = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($records as $record) {
    $moreContent .= "<p>" . $record["name"] . " - " . $record["email"] . "</p>";
}



ob_start();
include "view/pages/reviews.php";

$content = ob_get_clean();
$moreContent;

include "view/layout.php";

