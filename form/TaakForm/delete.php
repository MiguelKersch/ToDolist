<?php
include("../../navbar.php");

$id = $_GET['id'];
$lijstId = $_GET['lijstId'];

$sql= "DELETE FROM todo WHERE id = $id";
$query = $conn->prepare($sql); 
$query->bindParam(":id",$id);
$query->execute();

header("location:/ToDolist/taken.php?id=". $lijstId );
?>

