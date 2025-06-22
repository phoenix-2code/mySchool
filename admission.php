<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOLPROJECT</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="hero-section text-white text-center d-flex align-items-center justify-content-center"
     style="background: url('assets/images/H2.jpg') center center/cover no-repeat; height: 70vh;">
  <div class="bg-dark bg-opacity-50 p-4 rounded">
    <h1 class="display-4">Start Your Journey</h1>
    <p class="lead">Complete your application and begin your future at MySchool.</p>
  </div>
</div>

    <div class="container mt-4">
         <h4 class="mb-3">Admission Requirements</h4>
            <ul class="list-group mb-4">
                <li class="list-group-item">✔️ KCSE Certificate or equivalent (Minimum C+)</li>
                <li class="list-group-item">✔️ National ID or Passport copy</li>
                <li class="list-group-item">✔️ Passport-sized photo (recent)</li>
                <li class="list-group-item">✔️ Application fee payment receipt (where applicable)</li>
            </ul>
    </div>

<div class="container mt-5 mb-5">
        <h2 class="text-center mb-4">Course Application Form</h2>

        <form action="processAdmission.php" method="POST">
            <div class="row mb-3">
            <div class="col-md-6">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" name="fullName" id="fullName" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            </div>

            <div class="row mb-3">
            <div class="col-md-6">
                <label for="course" class="form-label">Select Course</label>
                <select name="course" id="course" class="form-select" required>
                <option value="">-- Choose --</option>
                <option value="CS101">Computer Science</option>
                <option value="BIT201">Business and Information Technology</option>
                <option value="IT301">Information Technology</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="campus" class="form-label">Preferred Campus</label>
                <select name="campus" id="campus" class="form-select" required>
                    <option value="">-- Choose --</option>
                    <option value="Main">Main Campus</option>
                    <option value="Town">Town Campus</option>
                    <option value="Virtual">Virtual Campus</option>
                </select>
            </div>
            </div>

           <div class="mb-4">
                <label class="form-label">Mode of Study</label>
                <div class="d-grid gap-2">
                    <label class="btn btn-outline-dark d-flex align-items-center justify-content-start">
                    <input type="radio" class="form-check-input me-2" name="mode" value="Full-time" required> Full-time
                    </label>
                    <label class="btn btn-outline-dark d-flex align-items-center justify-content-start">
                    <input type="radio" class="form-check-input me-2" name="mode" value="Part-time"> Part-time
                    </label>
                </div>
            </div>


            

            <div class="text-center">
                <button type="submit" class="btn btn-dark px-5 w-100">Apply Now</button>
            </div>
        </form>
</div>
<?php
//  Process the form submission
include 'includes/dbcon.php';

?>

<?php include 'includes/footer.php'; ?>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>