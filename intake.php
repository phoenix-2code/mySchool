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
<div class="hero-section text-white text-center d-flex align-items-center justify-content-center"
     style="background: url('assets/images/H3.jpg') center center/cover no-repeat; height: 65vh;">
  <div class="bg-dark bg-opacity-50 p-4 rounded">
    <h1 class="display-4">Upcoming Intakes</h1>
    <p class="lead">See application deadlines, term dates, and start planning today.</p>
  </div>
</div>

<div class="container mt-5 mb-5">
  <h3 class="mb-4 text-center">Intake Periods</h3>

  <?php
  $query = "SELECT intakeName, academicYear, startDate, registrationPeriod, notes FROM intakes ORDER BY startDate ASC";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-dark text-white">
        <h5 class="mb-0"><?php echo htmlspecialchars($row['intakeName']); ?></h5>
      </div>
      <div class="card-body">
        <p><strong>Academic Year:</strong> <?php echo htmlspecialchars($row['academicYear']); ?></p>
        <p><strong>Start Date:</strong> <?php echo date('F j, Y', strtotime($row['startDate'])); ?></p>
        <p><strong>Registration Period:</strong><br><?php echo nl2br(htmlspecialchars($row['registrationPeriod'])); ?></p>
        <p><strong>Notes:</strong><br><?php echo nl2br(htmlspecialchars($row['notes'])); ?></p>
      </div>
    </div>
  <?php
    }
  } else {
    echo '<p class="text-center">No intake records found.</p>';
  }
  ?>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>