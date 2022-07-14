<?php

require 'con_db.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: ingresar.php");

?>
