<?php
session_start();
session_unset();//detruit toutes les variables en session
header("location:index.php");
?>