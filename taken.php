
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



    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Lijsten</h2>
            </div>
            <div class="col"><button class="btn" onclick="filter('all');">alles</button></div>
            <div class="col"><button class="btn" onclick="filter('Bezig');">Bezig</button></div>
            <div class="col"><button class="btn" onclick="filter('Afgerond');">Afgerond</button></div>
            <div class="col"><button class="btn" onclick="filter('Niet begonnen');">Niet begonnen</button></div>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Naam</th>
                    <th scope="col">Beschrijving</th>
                    <th scope="col">Status</th>
                    <th scope="col"><a onclick="filter();">duur</th>
                    <th scope="col"></th>
                    <th scope="col"><a href="/Todolist/index.php"><i class="fas fa-arrow-left text-light"></i></a></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) { ?>
                    <tr class='trow'>
                        <td><?php echo $row['taak'] ?></td>
                        <td><?php echo $row['beschrijving'] ?></td>
                        <td class='status'><?php echo $row['status'] ?></td>
                        <td><?php echo $row['duur'] ?></td>
                        <td><a href="form/TaakForm/edit.php?id=<?php echo $row['id'] ?>"><i id="edit" class="fas fa-edit text-dark"></i></a></td>
                        <td><a onclick="return isValid()" href="form/TaakForm/delete.php?id=<?php echo $row['id'] ?>&lijstId=<?php echo $id ?>"><i id="trash" class="fas fa-trash-alt text-danger"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>



<?php include("footer.php") ?>
<script src="/Todolist/script/filter.js"></script>
<script type="text/javascript">
    function isValid() {
        if (!confirm('weet u zeker dat u dit wilt verwijderen?')) {
            return false;
        }
        return true;
    }
</script>
</script src="script/filter.js"></script>