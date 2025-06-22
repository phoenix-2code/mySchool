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
  <h2 class="mb-0">Financing Options</h2>
  <p class="lead">Flexible funding solutions to make your education possible.</p>
</div>

<div class="container mt-5 mb-5">
  <h3 class="mb-4 text-center">Financing Options</h3>

  <?php
  $query = "SELECT planName, eligibility, coverage, notes FROM financingOptions ORDER BY planName ASC";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-dark text-white">
        <h5 class="mb-0"><?php echo htmlspecialchars($row['planName']); ?></h5>
      </div>
      <div class="card-body">
        <p><strong>Eligibility:</strong><br><?php echo nl2br(htmlspecialchars($row['eligibility'])); ?></p>
        <p><strong>Coverage:</strong><br><?php echo nl2br(htmlspecialchars($row['coverage'])); ?></p>
        <p><strong>Notes:</strong><br><?php echo nl2br(htmlspecialchars($row['notes'])); ?></p>
      </div>
    </div>
  <?php
    }
  } else {
    echo '<p class="text-center">No financing options available at this time.</p>';
  }
  ?>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>