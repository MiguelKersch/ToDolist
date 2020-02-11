<html>
<header>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <h1>ToDolist</h1>
</header>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Task</th>
                <th scope="col">Description</th>
                <th scope="col">Requirements</th>
                <th scope="col">Deadline</th>
            </tr>
        </thead>
        <tbody>
             <?php foreach $all as $da
            ?>
            <tr>
                <th scope="row"></th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table>
</body>

</html>