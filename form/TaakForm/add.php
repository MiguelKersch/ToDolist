<?php
include "../../pdo/connection.php";


if (isset($_POST['submit'])) {
    try {

        $taak = $_POST['taak'];
        $beschrijving = $_POST['beschrijving'];
        $duur = $_POST['duur'];
        $status = $_POST['status'];
        $lijstId = $_POST['lijstId'];

        var_dump($taak);
        var_dump($beschrijving);
        var_dump($duur);
        var_dump($status);
        var_dump($lijstId);
        $stmt = $conn->prepare("INSERT INTO lijsten (naam) VALUES ('test')");
        
        var_dump($stmt);
        // $stmt->bind_Param(":taak", $taak);
        // $stmt->bind_Param(":beschrijving", $beschrijving);
        // $stmt->bind_Param(":duur", $duur);
        // $stmt->bind_Param(":status", $status);
        // $stmt->bind_Param(":lijstId", $lijstId);
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

            <label for="beschrijving">Beschrijving</label>
            <input type="text" id="beschrijving" name="beschrijving"><br>

            <label for="duur">Duur</label>
            <input type="time" id="duur" name="duur">

            <label for="status">Status</label>
            <input type="text" id="status" name="status"><br>

            <label for="lijstId">lijst</label>
            <input type="number" id="lijstId" name="lijstId">

            <input type="submit" name="submit">

        </form>
    </div>
</body>

</html>