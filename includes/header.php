<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>Aleks Finest</title>
</head>

<body>
  <div class="af-header">
    <div class="af-hero container">
      <div class="admin-nav d-flex">
        <div class="btn-group">
          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><button class="dropdown-item" type="button">Add Recipe</button></li>
            <li><button class="dropdown-item" type="button">Log Out</button></li>
          </ul>
        </div>
      </div>
      <div class="af-wrapper">
        <h1 class="af-headline"><img src="/assets/img/aleks-finest_logo_240x240.jpg" id="logo" alt="aleks-finest-logo"> Aleks Finest</h1>
        <h2 class="af-subheadline">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</h2>
      </div>
    </div>
    <div id="af-nav" class="af-nav container">
      <nav class="navbar main-nav navbar-expand">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == "/index.php" ? "active" : ""); ?>" aria-current="page" href="/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == "/pages/recipies.php" ? "active" : ""); ?>" href="/pages/recipies.php">Recipies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == "/pages/about.php" ? "active" : ""); ?>" href="/pages/about.php">About</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  </div>