<?php
require_once('class/class_database.php');
require_once "class/Parsedown.php";
$Parsedown = new Parsedown();

$fetchContentDB = new Database();
$result = $fetchContentDB->preparedQuery("SELECT * FROM content WHERE name = ?", array($_GET['page']))->fetchAll(PDO::FETCH_ASSOC);
if($result){
	echo json_encode($result);
} else{


}