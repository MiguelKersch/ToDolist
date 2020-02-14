<?php
include "../../pdo/connection.php";


if (isset($_POST['submit'])) {
    try {
        $taak = $_POST['taak'];
        $bescrijving = $_POST['bescrijving'];
        $duur = $_POST['duur'];
        $status = $_POST['status'];
        $lijst_id = $_POST['lijst_id'];

        $stmt = $conn->prepare('INSERT INTO todo (taak, bescrijving, duur, status , lijst_id) VALUES (:taak, :bescrijving, :duur , :status , :lijst_id)');


        $stmt->bindParam(":taak", $taak);
        $stmt->bindParam(":bescrijving", $bescrijving);
        $stmt->bindParam(":duur", $duur);
        $stmt->bindParam(":status", $status);
        $stmt->bindParam(":lijst_id", $lijst_id);
        $stmt->execute();
    } catch (PDOException $e) {

        echo "Failed to Add task: " . $e->getMessage();
    }
}








?>
<html>
<?php include "../../parts/navbar.php" ?>

<body>
    <div class="container">
        <form action=" " method="post">
            <br>
            <label for="taak">Taak</label>
            <input type="text" id="taak" name="taak"><br>

            <label for="bescrijving">Bescrijving</label>
            <input type="text" id="bescrijving" name="bescrijving"><br>

            <label for="duur">Duur</label>
            <input type="time" id="duur" name="duur">

            <label for="Requirements">Status</label>
            <input type="text" id="requirements" name="requirements"><br>

            <label for="lijst_id" id="lijst_id" name="lijst_id">lijst</label>
            <input type="choice">
            <input type="submit" name="submit">

        </form>
    </div>
</body>

</html>