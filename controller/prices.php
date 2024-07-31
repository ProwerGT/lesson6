<?php

$title = "Наши услуги";

$sql = 'SELECT *
		FROM contacts';

$statement = $pdo->query($sql);

$records = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($records as $record) {
    $content .= "<p>" . $record["name"] . " - " . $record["email"] . "</p>";
}

// Начало буферизации вывода

ob_start();
include "view/pages/prices.php";

$content = ob_get_clean();


include "view/layout.php";

