<?php
include("../../navbar.php");

$id = $_GET['id'];

$sql= "DELETE FROM lijsten WHERE id = $id";
$query = $conn->prepare($sql); 
$query->bindParam(":id",$id);
$query->execute();


$sql= "DELETE FROM todo WHERE lijstId = :id";
$query = $conn->prepare($sql); 
$query->bindParam(":id",$id);
$query->execute();

header("location:/ToDolist/index.php");
