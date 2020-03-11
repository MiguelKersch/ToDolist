<html>
<?php include "navbar.php"; ?>

<?php
$id = $_GET['id'];

$sql = "select todo.id, todo.taak, todo.beschrijving, todo.status, todo.duur from todo INNER JOIN lijsten
ON lijsten.id = lijstId where lijstId = :id ";
$query = $conn->prepare($sql);
$query->bindParam(":id", $id);
$query->execute();
$result = $query->fetchAll();

?>
<script type="text/javascript">
    function isValid() {
        if (!confirm('weet u zeker dat u dit wilt verwijderen?')) {
            return false;
        }
        return true;
    }
</script>

<body>
    <div class="container">

        <div class="row">
            <h2>Lijsten</h2>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Naam</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row) { ?>
                        <tr>
                            <td><?php echo $row['taak'] ?></td>
                            <td><?php echo $row['beschrijving'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                            <td><?php echo $row['duur'] ?></td>
                            <td><a href="form/TaakForm/edit.php?id=<?php echo $row['id'] ?>"><i id="edit" class="fas fa-edit"></i></a></td>
                            <td><a onclick="return isValid()" href="form/TaakForm/delete.php?id=<?php echo $row['id'] ?>&lijstId=<?php echo $id ?>"><i id="trash" class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
    <?php include("footer.php") ?>