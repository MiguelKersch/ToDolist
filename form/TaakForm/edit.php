<?php
include("../../navbar.php");

$Taskid = $_GET['id'];


$sql = "SELECT * from lijsten";
$query = $conn->prepare($sql);
$query->execute();
$lijstResult = $query->fetchAll();

$sql = "SELECT * from todo where id = :id";
$query = $conn->prepare($sql);
$query->bindParam(":id", $id);
$query->execute();

$result = $query->fetch();

if (isset($_POST["submit"])) {
    $Taskid = $_GET["id"];
    $taak = $_POST["inputTaak"];
    $beschrijving = $_POST["inputBeschrijving"];
    $status = $_POST["inputStatus"];
    $duur = $_POST["inputDuur"];
    $lijst = $_POST["inputLijst"];
    var_dump($_POST);
  
    $sql = "UPDATE todo SET (taak = :taak , beschrijving = :beschrijving , status = :status  , duur = :duur , lijstId = :lijst) WHERE id = :taskId ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":taskId", $Taskid);
    $stmt->bindParam(":taak", $taak);
    $stmt->bindParam(":beschrijving", $beschrijving);
    $stmt->bindParam(":status", $status);
    $stmt->bindParam(":duur", $duur);
    $stmt->bindParam(":lijst", $lijst);
    $stmt->execute();
    header("location:/ToDolist/index.php");
}


?>

<main class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . "?id=" . $id); ?>" method="POST">
        <div class="form-group">
            <label for="inputTaak">Taak</label>
            <input type="text" name="inputTaak" class="form-control" id="Taak" value="<?php echo $result['taak'] ?>" required>
            <label for="inputBeschrijving">Beschrijving</label>
            <input type="text" name="inputBeschrijving" class="form-control" id="Beschrijving" value="<?php echo $result['beschrijving'] ?>" required>
            <label for="inputStatus">Status</label>
            <select name="inputStatus" class="form-control" id="Status" value="<?php echo $result['status'] ?>" required>
                <option value="Niet begonnen">Niet begonnen</option>
                <option value="Bezig">Bezig</option>
                <option value="Afgerond">Afgerond</option>
            </select>
            <label for="inputDuur">Duur in minuten</label>
            <input type="integer" name="inputDuur" class="form-control" id="Name" value="<?php echo $result['duur'] ?>" required>
            <label for="inputLijst">Lijst id</label>
            <select name="inputLijst" class="form-control" id="Lijst" value="<?php echo $result['lijst'] ?>" required>
                <?php foreach ($lijstResult as $row) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['naam'] ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </form>
</main>

<?php include("../../footer.php"); ?>