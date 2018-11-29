<?php

$dbh = connectToDatabase();

// Tabelle benötigt folgende Spalten:
// id, int, auto_increment
// name, varchar
// message, text

$statement = $dbh->prepare('INSERT INTO entries (name, title, message, date, image) VALUES (:name, :title, :message, NOW(), :image)');
$statement->bindParam(':name', $_POST['name']);
$statement->bindParam(':message', $_POST['message']);
$statement->bindParam(':image', $_POST['link']);
$statement->bindParam(':title', $_POST['title']);

$statement->execute();

header('Location: list');