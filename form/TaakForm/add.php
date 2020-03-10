<?php
include("../../navbar.php");

if (isset($_POST["submit"])) {
    $taak = $_POST["inputTaak"];
    $beschrijving = $_POST["inputBeschrijving"];
    $status = $_POST["inputStatus"];
    $duur = $_POST["inputDuur"];
    $lijst = $_POST["inputLijst"];

    $stmt = $conn->prepare("INSERT INTO todo (taak , beschrijving , status, duur , lijstId) VALUES (:taak, :beschrijving, :status, :duur , :lijst);");
    $stmt->bindParam(":taak", $taak);
    $stmt->bindParam(":beschrijving", $beschrijving);
    $stmt->bindParam(":status", $status);
    $stmt->bindParam(":duur", $duur);
    $stmt->bindParam(":lijst", $lijst);
    $stmt->execute();

    header("Location: ../../index.php");
}
?>

<main class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form-group">
            <label for="inputTaak">Taak</label>
            <input type="text" name="inputTaak" class="form-control" id="inputTaak" placeholder="Taak" required>
            <label for="inputBeschrijving">Beschrijving</label>
            <input type="text" name="inputBeschrijving" class="form-control" id="inputBeschrijving" placeholder="Beschrijving" required>
            <label for="inputStatus">Status</label>
            <input type="text" name="inputStatus" class="form-control" id="inputStatus" placeholder="Status" required>
            <label for="inputDuur">Duur</label>
            <input type="time" name="inputDuur" class="form-control" id="inputName" required>
            <label for="inputLijst">Lijst id</label>
            <input type="number" name="inputLijst" class="form-control" id="inputLijst" placeholder="Lijst id" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </form>
</main>

<?php include("../../footer.php"); ?>