<?php
// MongoDB Connection
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

function getDB() {
    global $manager;
    return $manager;
}
?>
