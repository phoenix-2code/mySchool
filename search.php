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

$search = mysqli_real_escape_string($conn, $_GET['query']);
?>

<div class="container mt-5">
  <h4 class="mb-4">Results for "<em><?php echo htmlspecialchars($search); ?></em>"</h4>

  <!-- Campuses -->
  <?php
  $campusQuery = "SELECT * FROM campuses WHERE campusName LIKE '%$search%' OR location LIKE '%$search%' OR description LIKE '%$search%'";
  $campusResult = mysqli_query($conn, $campusQuery);

  if (mysqli_num_rows($campusResult) > 0) {
    echo "<h5 class='mt-4'>Campuses</h5>";
    while ($campus = mysqli_fetch_assoc($campusResult)) {
      echo "<div class='card mb-3 shadow-sm'>
              <div class='card-header bg-success text-white'>{$campus['campusName']}</div>
              <div class='card-body'>
                <p><strong>Location:</strong> {$campus['location']}</p>
                <p>{$campus['description']}</p>
              </div>
            </div>";
    }
  }
  ?>

  <!-- Schools -->
  <?php
  $schoolQuery = "SELECT * FROM schools WHERE schoolName LIKE '%$search%' OR description LIKE '%$search%'";
  $schoolResult = mysqli_query($conn, $schoolQuery);

  if (mysqli_num_rows($schoolResult) > 0) {
    echo "<h5 class='mt-4'>Schools</h5>";
    while ($school = mysqli_fetch_assoc($schoolResult)) {
      echo "<div class='card mb-3 shadow-sm'>
              <div class='card-header bg-secondary text-white'>{$school['schoolName']}</div>
              <div class='card-body'>
                <p>{$school['description']}</p>
              </div>
            </div>";
    }
  }
  ?>

  <!-- Courses -->
  <?php
  $courseQuery = "SELECT * FROM courses WHERE courseName LIKE '%$search%' OR courseCode LIKE '%$search%'"; 
  $courseResult = mysqli_query($conn, $courseQuery);

  if (mysqli_num_rows($courseResult) > 0) {
    echo "<h5 class='mt-4'>Courses</h5>";
    while ($course = mysqli_fetch_assoc($courseResult)) {
      echo "<div class='card mb-3 shadow-sm'>
              <div class='card-header bg-dark text-white'>{$course['courseCode']} - {$course['courseName']}</div>
              <div class='card-body'>
                
              </div>
            </div>";
    }
  }
  ?>

  <!-- Intakes -->
  <?php
  $intakeQuery = "SELECT * FROM intakes WHERE intakeName LIKE '%$search%' OR academicYear LIKE '%$search%' OR notes LIKE '%$search%'";
  $intakeResult = mysqli_query($conn, $intakeQuery);

  if (mysqli_num_rows($intakeResult) > 0) {
    echo "<h5 class='mt-4'>Intakes</h5>";
    while ($intake = mysqli_fetch_assoc($intakeResult)) {
      echo "<div class='card mb-3 shadow-sm'>
              <div class='card-header bg-primary text-white'>{$intake['intakeName']}</div>
              <div class='card-body'>
                <p><strong>Academic Year:</strong> {$intake['academicYear']}</p>
                <p><strong>Start Date:</strong> {$intake['startDate']}</p>
                <p>{$intake['notes']}</p>
              </div>
            </div>";
    }
  }
  ?>

  <!-- Study Modes -->
  <?php
  $modeQuery = "SELECT * FROM studyModes WHERE modeName LIKE '%$search%' OR description LIKE '%$search%'";
  $modeResult = mysqli_query($conn, $modeQuery);

  if (mysqli_num_rows($modeResult) > 0) {
    echo "<h5 class='mt-4'>Study Modes</h5>";
    while ($mode = mysqli_fetch_assoc($modeResult)) {
      echo "<div class='card mb-3 shadow-sm'>
              <div class='card-header bg-info text-white'>{$mode['modeName']}</div>
              <div class='card-body'>
                <p>{$mode['description']}</p>
              </div>
            </div>";
    }
  }
  ?>

  <!-- No Matches Found -->
  <?php
  if (
    mysqli_num_rows($campusResult) === 0 &&
    mysqli_num_rows($schoolResult) === 0 &&
    mysqli_num_rows($courseResult) === 0 &&
    mysqli_num_rows($intakeResult) === 0 &&
    mysqli_num_rows($modeResult) === 0
  ) {
    echo "<p class='text-center'>No matching results found.</p>";
  }
  ?>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>