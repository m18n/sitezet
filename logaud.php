<?php
require 'server.php';
unset($_SESSION['logged_user']);
header('Location:/');
?>