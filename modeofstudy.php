<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOLPROJECT</title>
</head>
<body>
    <?php
include 'includes/header.php';
include 'includes/dbcon.php';
?>
<div class="bg-warning text-dark py-4 mb-4 text-center">
  <h2 class="mb-0">Modes of Study</h2>
  <p class="lead">Find a learning format that fits your lifestyle and goals.</p>
</div>

<div class="container mt-5 mb-5">
  <h3 class="mb-4 text-center">Modes of Study</h3>

  <?php
  $query = "SELECT modeName, description FROM studyModes ORDER BY modeName ASC";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-dark text-white">
        <h5 class="mb-0"><?php echo htmlspecialchars($row['modeName']); ?></h5>
      </div>
      <div class="card-body">
        <p><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
      </div>
    </div>
  <?php
    }
  } else {
    echo '<p class="text-center">No study modes found.</p>';
  }
  ?>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>