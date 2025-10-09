<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Buddy's Cafe Feedback</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Owl Carousel CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">

  <style>
    body {
      background-image: url('buddy.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
    }
    #inbox {
      background: transparent;
      color: MediumSeaGreen;
    }
    .testimonial-item {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      margin: 10px;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <div class="row">
    <!-- Testimonials Left -->
     <div class="col-md-8">
      <h2 class="text-primary mb-4">What Our Clients Say</h2>
      <div class="owl-carousel testimonial-carousel">
        <?php foreach($cust_arr as $data) { ?>
        <div class="testimonial-item">
          <h5><?php echo $data->name; ?></h5>
          <?php
        for ($i = 1; $i <= 5; $i++) {
          echo $i <= $data->rating ? '★' : '☆';
        }
      ?>

          <p><?php echo $data->feedback?></p>
        </div>
          <?php
          }
          ?>
      </div>
    </div>

    <!-- Feedback Form Right -->
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h3 class="text-center">Buddy's Cafe</h3>
          <form method="post">
            <div class="mb-3">
              <label id="inbox">Your Name:</label>
              <input type="text" class="form-control" id="inbox" name="name" placeholder="Enter Name" required>
            </div>
            <div class="mb-3">
              <label id="inbox">Mobile:</label>
              <input type="text" class="form-control" id="inbox" name="mobile" placeholder="Enter Mobile Number" required>
            </div>
            <div class="mb-3">
              <label id="inbox">Order NO.:</label>
              <input type="number" class="form-control" id="inbox" name="ord_no" placeholder="Enter Order NO." required>
            </div>
            <div class="mb-3">
              <label id="inbox">Rating:</label>
              <select class="form-select" name="rating" id="inbox" required>
                <option value="1">★☆☆☆☆</option>
                <option value="2">★★☆☆☆</option>
                <option value="3">★★★☆☆</option>
                <option value="4">★★★★☆</option>
                <option value="5">★★★★★</option>
              </select>
            </div>
            <div class="mb-3">
              <label id="inbox">Feedback:</label>
              <textarea class="form-control" name="feedback" id="inbox" rows="3" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success w-100">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- JS Scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function () {
    $(".testimonial-carousel").owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 6000,
      smartSpeed: 800,
      dots: true,
      nav: false
    });
  });
</script>

</body>
</html>