<?php

$dbh = connectToDatabase();

$statement = $dbh->prepare('INSERT INTO entries (name, title, message, date, image) VALUES (:name, :title, :message, NOW(), :image)');
$statement->bindParam(':name', $_POST['name']);
$statement->bindParam(':message', $_POST['message']);
$statement->bindParam(':image', $_POST['link']);
$statement->bindParam(':title', $_POST['title']);
$statement->execute();

// Mail schicken 
ini_set("SMTP", "msscript1.webland.ch");
ini_set("sendmail_from", "team@041er-blj.ch");
$message = "Es wurde eben ein neuer Blog-Beitrag erfasst, von: " .  $_POST['name'];
$headers = "From: team@041er-blj.ch";
mail("david.lustenberger@bluewin.ch" ,"Neuer Blog-Post", $message, $headers);



header('Location: list');



$dbh = connectToDatabase();

$statement = $dbh->prepare('INSERT INTO rating (name, message, date) VALUES (:name, :message, NOW())');
$statement->bindParam(':name', $_POST['name']);
$statement->bindParam(':message', $_POST['message']);

$statement->execute();

header('Location: list');