<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOOLPROJECT</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.php">Home</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-sm-0">
        <li class="nav-item"><a class="nav-link" href="courses.php">Courses</a></li>
        <li class="nav-item"><a class="nav-link" href="admission.php">Admission</a></li>
        <li class="nav-item"><a class="nav-link" href="intake.php">Intakes</a></li>
        <li class="nav-item"><a class="nav-link" href="campuses.php">Campuses</a></li>
        <li class="nav-item"><a class="nav-link" href="financing.php">Financing</a></li>
        <li class="nav-item"><a class="nav-link" href="modeofstudy.php">Study Modes</a></li>
        <li class="nav-item"><a class="nav-link" href="schools.php">Schools</a></li>
        <li class="nav-item"><a class="nav-link" href="academicyear.php">Academic Year</a></li>
      </ul>

      <form action="search.php" method="GET" class="d-flex" role="search">
        <input type="text" name="query" class="form-control me-2" placeholder="Search..." required>
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>

  </div>
</nav>

    

</body>
</html>