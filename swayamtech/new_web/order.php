<?php
if(isset($_SESSION['u_name']))
{
  
}
else
{
  echo "<script>
      window.location='login';
  </script>";
}
?>


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
    .product-img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }
  </style>
</head>
<body class="bg-light">

<div class="container order-card">
  <div class="card shadow">
    <div class="card-header bg-primary text-white text-center">
      <h4>Order Product</h4>
    </div>
    <div class="card-body">
      <!-- Product Preview -->
      <div class="mb-4 text-center">
        <img src="../admin/assets/images/service/<?php echo $fetch->image; ?>" width="250px" alt="Product" >
        <h5 class="mt-3">Product Name: <?php echo $fetch->serv_name; ?></h5>
        <p class="text-muted" name="Price">Price: ₹<?php echo $fetch->price; ?></p>
      </div>
 
      <!-- Order Form -->
      <form method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" name="" value="<?php echo  $_SESSION['u_name']?>" class="form-control" id="name" name="cust_name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" name="email" value="<?php echo  $_SESSION['u_email']?>" class="form-control" id="email" name="cust_email" required>
        </div>
        <div class="mb-3">
          <label for="mobile" class="form-label">Mobile Number</label>
          <input type="number" name="mobile" class="form-control" id="mobile" name="mobile" placeholder="+91 12345 67890" required>
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Shipping Address</label>
          <textarea class="form-control" name="address" id="address" name="cust_address" rows="3" required></textarea>
        </div>
        <div class="mb-3">
          <label for="quantity" class="form-label">Quantity</label>
          <input type="number" name="quantity" class="form-control" id="quantity" name="cust_quantity" min="1" value="1" required>
        </div>

        <button type="submit" name="submit" class="btn btn-success w-100">Place Order</button>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>