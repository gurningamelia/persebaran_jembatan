<?php 
session_start();
require('../connection.php');
include('modules/functions.php');
include('modules/siteidenty.php');

if(!empty($_SESSION["table"])){
	$sql = $conn->query('SELECT * FROM `'.$_SESSION['table'].'` WHERE `'.$_SESSION['keylog'].'` = "'.$_SESSION['valog'].'"');
	$session = $sql->fetch_array();
}else{
	header('Location:../?m=pages&p=login');
}
include('pages/header.php'); 
include('pages/navbar.php'); 
include('pages/sidebar.php'); 
?>
<div class="content-wrapper pt-3 pb-3">
<section class="content">
<div class="container-fluid">
<?php 
    
$file=htmlentities($_GET['p']);
$folder=htmlentities($_GET['m']);
$pagefolder= "$folder/$file.php";

if(!empty($file) and file_exists($pagefolder)){
	include("$pagefolder");
}elseif(!empty($file) and !file_exists($pagefolder)){
	include("pages/404.php");
}else{ 
	include('pages/dashboard.php');
}
?>
</div>
</section>
</div>
<?php include('pages/footer.php'); ?>