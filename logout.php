<?php
session_start();
session_destroy();
header("Location:arroz.php");
exit;

?>