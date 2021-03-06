<?php
include("../../navbar.php");
$id = $_GET['id'];

$sql = 'SELECT * from lijsten where id = :id';
$query = $conn->prepare($sql);
$query->bindParam(":id", $id);
$query->execute();

$result = $query->fetch();

if (isset($_POST["submit"])) {
    $lijstId = $_GET["id"];
    $naam = $_POST['inputName'];

    $sql = 'UPDATE lijsten SET naam = :naam WHERE id = :lijstId';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":lijstId", $lijstId);
    $stmt->bindParam(":naam", $naam);
    $stmt->execute();
    header("location:/ToDolist/index.php");
}



?>

<main class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . "?id=" . $id); ?>" method="POST">
        <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" name="inputName" class="form-control" id="inputName" value="<?php echo $result['naam'] ?>" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </form>
</main>

<?php include("../../footer.php"); ?>