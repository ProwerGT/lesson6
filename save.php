<?php

require "database/connection.php";

$sql = "INSERT INTO contacts(name, title, email) VALUES(:name, :title, :email)";

$statement = $pdo->prepare($sql);

$statement->execute([
    ":name" => $_POST["name"],
    ":title" => $_POST["title"],
    ":email" => $_POST["email"],
]);

header("Location: /book?success=true");
