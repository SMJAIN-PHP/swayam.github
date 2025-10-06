

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Place Your Order</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .order-card {
      max-width: 600px;
      margin: auto;
      margin-top: 50px;
    }
    .profile-img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid #fff;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
      margin-bottom: 10px;
    }
  </style>
</head>
<body class="bg-light">

<div class="container order-card">
  <div class="card shadow">
    <div class="card-header bg-primary text-white text-center">
      <h4>Your Profile</h4>
    </div>
    <div class="card-body">
      <!-- Product Preview -->
      

      <!-- Order Form -->
      <form method="post" enctype="multipart/form-data" id="profileForm">
  <div class="text-center mb-4">
    <img id="preview" src="assets/images/customers/<?php echo $fetch->image; ?>" alt="Profile Image" class="profile-img">
    <input type="file" value="<?php echo $fetch->image ?>" name="image" id="profilePicInput" accept="image/*" style="display: none;" onchange="previewImage(event)">
 <br>
     <label for="profilePicInput" class="btn btn-sm btn-outline-primary">Change Photo</label>
  </div>
  <!-- rest of your form fields -->


      <!-- Profile Form -->
      <form method="post" id="profileForm">
        <div class="mb-3">
          <label for="fullName" class="form-label">Your Name</label>
          <input type="text" name="cust_name" class="form-control" id="fullName" placeholder="Enter your name" value="<?php echo $fetch->cust_name ?>">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="email" value="<?php echo $fetch->email ?>" placeholder="you@example.com">
        </div>
        <div class="mb-3">
          <label for="location" class="form-label">Mobile Number</label>
          <input type="text" name="mobile" class="form-control" id="location" value="<?php echo $fetch->mobile ?>" placeholder="mobile number">
        </div>

        <div class="d-flex justify-content-between">
          <button name="save" type="submit" class="btn btn-success">Save Changes</button>
          <a href="my_profile" class="btn btn-danger">Reset/Back to Profile</a>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>