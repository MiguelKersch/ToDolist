<?php
include("../../navbar.php");
$id = $_GET['id'];

$sql = 'SELECT * from lijsten where id = :id';
$query = $conn->prepare($sql);
$query->bindParam(":id", $id);
$query->execute();

$result = $query->fetch();
if (isset($_POST["submit"])) {
    $naam = $_POST['inputName'];

    $sql = 'UPDATE lijsten SET (naam) VALUES (:naam) WHERE id = :id ';

    $query = $conn->prepare($sql);
    $query->bindParam(":naam", $naam);



    $query->execute();
    header("location:/ToDolist/index.php");
}

?>

<main class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" name="inputName" class="form-control" id="inputName" value="<?php echo $result['naam'] ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </form>
</main>

<?php include("../../footer.php"); ?>