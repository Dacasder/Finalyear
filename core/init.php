<?php
$db = mysqli_connect('127.0.0.1', 'root','' ,'sams');

require_once 'helpers/helpers.php';
session_start();
if(isset($_SESSION['success_flash'])){
	echo '<div class ="bg-success"><p class="text-warning text-center">'.$_SESSION['success_flash'].'</p></div>';
	unset($_SESSION['success_flash']);
}
if(isset($_SESSION['error_flash'])){
	echo '<div class ="bg-warning"><p class="text-danger text-center">'.$_SESSION['error_flash'].'</p></div>';
	unset($_SESSION['error_flash']);
}
