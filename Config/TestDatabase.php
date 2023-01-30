<?php
use Config\Database;

require_once "Database.php";

$db = Database::getConnection();
echo "Success connection";