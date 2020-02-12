<html>
<?php include "parts/navbar.php" ?>

<body>
    <a href="form.php">
        <div class="row">
            <?php foreach ($item as $todo) { ?>
                <div class="col-6">
                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
</body>

</html>