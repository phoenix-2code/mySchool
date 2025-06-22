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
<div class="hero-section text-white text-center d-flex align-items-center justify-content-center"
     style="background: url('assets/images/H1.jpg') center center/cover no-repeat; height: 70vh;">
  <div class="bg-dark bg-opacity-50 p-4 rounded">
    <h1 class="display-4">Explore Our Courses</h1>
    <p class="lead">Browse programs across our academic schools and find your best fit.</p>
  </div>
</div>

    <h2 class="text-center mb-4">Available Courses</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>School</th>
                </tr>
            </thead>
            <?php
            // Fetch courses from the database
            $query = "SELECT * FROM courses";
            $result = mysqli_query($conn, $query);
            $count = 1;

                while ($row = mysqli_fetch_assoc($result)) {
                    $code = $row['courseCode'];
                    $name = $row['courseName'];
                    $school = $row['schoolName'];

                    echo "<tr>";
                    echo "<td>$count</td>";
                    echo "<td>$code</td>";
                    echo "<td>$name</td>";
                    echo "<td>$school</td>";
                    echo "</tr>";

                    $count++;
                }

            ?>        
        </table>
    </div>
    <?php
    // Include the footer file
    include 'includes/footer.php';
    ?>
</body>
</html>