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
  <h2 class="mb-0">Explore Our Campuses</h2>
  <p class="lead">From Limuru to Nairobi and beyond — see where learning happens.</p>
</div>

<div class="container mt-5 mb-5">
  <h3 class="mb-4 text-center">Our Campuses</h3>

  <?php
  $query = "SELECT campusName, location, contactInfo, description FROM campuses ORDER BY campusName ASC";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-dark text-white">
        <h5 class="mb-0"><?php echo htmlspecialchars($row['campusName']); ?></h5>
      </div>
      <div class="card-body">
        <p><strong>Location:</strong> <?php echo htmlspecialchars($row['location']); ?></p>
        <p><strong>Contact Info:</strong><br><?php echo nl2br(htmlspecialchars($row['contactInfo'])); ?></p>
        <p><strong>Description:</strong><br><?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
      </div>
    </div>
  <?php
    }
  } else {
    echo '<p class="text-center">No campus records found.</p>';
  }
  ?>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>