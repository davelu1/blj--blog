<?php

$dbh = connectToDatabase();

$statement = $dbh->prepare('SELECT * FROM entries order by date desc');
$statement->execute();

$entries = $statement->fetchAll();

require 'blog.php';





$dbh = connectToDatabase();

$statement = $dbh->prepare('SELECT * FROM rating');
$statement->execute();

$rating = $statement->fetchAll();

require 'rating.php';