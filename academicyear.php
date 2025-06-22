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

<div class="container mt-5 mb-5">
  <h3 class="mb-4 text-center">Academic Calendar</h3>

  <?php
  // Fetch academic years from the database (excluding created_at)
  $query = "SELECT yearLabel, startDate, endDate, semester1, semester2, semester3, registrationDates, examPeriods, holidays FROM academicYears ORDER BY startDate ASC";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
  ?>
      <div class="card mb-4 shadow-sm">
        <div class="card-header bg-dark text-white">
          <h5 class="mb-0"><?php echo htmlspecialchars($row['yearLabel']); ?> Academic Year</h5>
        </div>
        <div class="card-body">
          <p><strong>Start Date:</strong> <?php echo date('F j, Y', strtotime($row['startDate'])); ?></p>
          <p><strong>End Date:</strong> <?php echo date('F j, Y', strtotime($row['endDate'])); ?></p>

          <div class="row">
            <div class="col-md-4"><strong>Semester 1:</strong><br><?php echo nl2br(htmlspecialchars($row['semester1'])); ?></div>
            <div class="col-md-4"><strong>Semester 2:</strong><br><?php echo nl2br(htmlspecialchars($row['semester2'])); ?></div>
            <div class="col-md-4"><strong>Semester 3:</strong><br><?php echo nl2br(htmlspecialchars($row['semester3'])); ?></div>
          </div>

          <hr>
          <p><strong>Registration Dates:</strong><br><?php echo nl2br(htmlspecialchars($row['registrationDates'])); ?></p>
          <p><strong>Exam Periods:</strong><br><?php echo nl2br(htmlspecialchars($row['examPeriods'])); ?></p>
          <p><strong>Holidays:</strong><br><?php echo nl2br(htmlspecialchars($row['holidays'])); ?></p>
        </div>
      </div>
  <?php
    }
  } else {
    echo '<p class="text-center">No academic year records found.</p>';
  }
  ?>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>