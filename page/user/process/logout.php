<?php 
include '../../../../PetsQu/config/config.php';
session_start();
session_destroy();
header('Location:'.$base_url)
?>