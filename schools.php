<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOLPROJECT</title>
</head>
<body>
    <?php
        // Include the header file
        include 'includes/header.php';
        // Include the database connection file
        include 'includes/dbcon.php';
        ?>
        <div class="container mt-5 mb-5">
            <h3 class="mb-4 text-center">Our Academic Schools</h3>

                <div class="row">
                    <?php
                    // Fetch schools from the database
                    $result = mysqli_query($conn, "SELECT schoolName, description, createdAt FROM schools");
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5><?php echo htmlspecialchars($row['schoolName']); ?></h5>
                                    <p><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
                                    <small class="text-muted">Added: <?php echo date('F j, Y', strtotime($row['createdAt'])); ?></small>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        </div>
    <?php
        // Include the footer file
        include 'includes/footer.php';
    ?>
</body>
</html>
