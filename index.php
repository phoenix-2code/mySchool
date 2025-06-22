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
    ?>
    <div class="hero-section text-white text-center d-flex align-items-center justify-content-center"
        style="background: url('assets/images/hero.jfif') center center/cover no-repeat; height: 85vh;">
        <div class="bg-dark bg-opacity-50 p-5 rounded">
            <h1 class="display-3">Welcome to MySchool</h1>
            <p class="lead">Empowering learners through flexible, modern, and meaningful education.</p>
            <a href="admission.php" class="btn btn-light btn-lg mt-3">Apply Now</a>
        </div>
    </div>
    <br>    
    <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">View Courses</h5>
                    <p class="card-text">Explore our programs across different schools and campuses.</p>
                   <a href="courses.php" class="btn btn-dark w-100">Browse</a>
                </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Apply for Admission</h5>
                    <p class="card-text">Start your academic journey by submitting your application form.</p>
                    <a href="admission.php" class="btn btn-dark w-100">Apply</a>
                </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Learn About Intakes</h5>
                    <p class="card-text">View admission dates, academic calendars, and entry modes.</p>
                    <a href="intake.php" class="btn btn-dark w-100">See Details</a>
                </div>
                </div>
            </div>
    </div>
        <div class="alert alert-primary text-center mt-5" role="alert">
          Ready to take the next step?  <a href="admission.php" class="alert-link">Apply today</a>.
        </div>

    <?php
    // Include the footer file
     include 'includes/footer.php'; 
    ?>
</body>
</html>
