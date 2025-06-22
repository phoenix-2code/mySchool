<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOLPROJECT</title>
</head>
<body>
    <?php
// Include the header and database connection files
include 'includes/header.php';
include 'includes/dbcon.php';

if (isset($_POST['fullName'], $_POST['email'], $_POST['course'], $_POST['campus'], $_POST['mode'])) {
    $name = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $campus = mysqli_real_escape_string($conn, $_POST['campus']);
    $mode = mysqli_real_escape_string($conn, $_POST['mode']);

    $query = "INSERT INTO applications (fullName, email, course, campus, mode)
              VALUES ('$name', '$email', '$course', '$campus', '$mode')";

    if (mysqli_query($conn, $query)) {
        echo "<div style='text-align:center; padding: 40px;'>
                <h2 style='color:green;'>Application submitted successfully!</h2>
                <p>Thank you, $name. We'll contact you at <strong>$email</strong>.</p>
              </div>";
    } else {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
} else {
    echo "<p style='color:red;'>Please fill in all required fields.</p>";
}
header("Location: admission.php?submitted=true");
exit();

?>
    <?php
    // Include the footer file
    include 'includes/footer.php';
    ?>
</body>
</html>