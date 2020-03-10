<html>
<?php include "navbar.php"; ?>

<?php
$sql = "select * from lijsten";
$query = $conn->prepare($sql);
$query->execute();
$result = $query->fetchAll();

?>

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
                            <td></td>
                            <td><a href="edit.php?id=<?php echo $row['id'] ?>"><i id="edit" class="fas fa-edit"></i></a></td>
                            <td><a onclick="return isValid()" href="delete.php?id=<?php echo $row['id'] ?>"><i id="trash" class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
    <?php include("footer.php") ?>