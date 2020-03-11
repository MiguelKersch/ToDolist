<html>
<?php include "navbar.php"; ?>

<?php
$sql = "select * from lijsten";
$query = $conn->prepare($sql);
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $row) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['naam'] ?></a></td>
                            <td><a href="form/lijstForm/index.php?id=<?php echo $row['id'] ?>""><i id=" show" class="fas fa-eye"></i></a></td>
                            <td><a href="form/lijstForm/edit.php?id=<?php echo $row['id'] ?>"><i id="edit" class="fas fa-edit"></i></a></td>
                            <td><a onclick="return isValid()" href="form/lijstForm/delete.php?id=<?php echo $row['id'] ?>"><i id="trash" class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
    <?php include("footer.php") ?>