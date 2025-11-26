<?php
session_start();
$user = $_SESSION['username'] ?? 'Guest';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TechNova Solutions</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    .hero {
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      color: white;
      padding: 100px 0;
      text-align: center;
    }
    .features i {
      font-size: 2rem;
      color: #007bff;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TechNova</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <h1>Welcome, <?= htmlspecialchars($user) ?>!</h1>
    <p>Empowering small businesses with smart web solutions.</p>
    <a href="home" class="btn btn-primary">Get Started</a>
     <a href="view" class="btn btn-success">Get view</a>
  </div>
</section>

<!-- Features -->
<section class="features py-5">
  <div class="container text-center">
    <h2 class="mb-4">Our Services</h2>
    <div class="row">
      <div class="col-md-4">
        <i class="fas fa-code"></i>
        <h5 class="mt-3">Custom Development</h5>
        <p>Tailored PHP/Laravel apps for your business needs.</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-mobile-alt"></i>
        <h5 class="mt-3">Responsive Design</h5>
        <p>Mobile-first layouts with Bootstrap 5 and UX best practices.</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-database"></i>
        <h5 class="mt-3">Database Integration</h5>
        <p>Robust MySQL-backed systems with secure session handling.</p>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
  &copy; <?= date('Y') ?> TechNova Solutions. All rights reserved.
</footer>

</body>
</html>