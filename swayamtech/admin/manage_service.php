<?php include_once('header.php'); ?>

<!-- Main wrapper -->
<div class="body-wrapper">
  <div class="body-wrapper-inner">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Manage Service</h5>
          <p class="mb-0">Manage Service</p>

          <table class="table table-striped">
            <thead>
              <tr>
                <th>#ID</th>
                <th>Service Name</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($serv_arr as $data) { ?>
              <tr>
                <td><?php echo $data->id; ?></td>
                <td><?php echo $data->serv_name; ?></td>
                <td><?php echo $data->cate_name; ?></td>
                <td>
                  <textarea name="description" class="form-control"><?php echo $data->description; ?></textarea>
                </td>
                <td><?php echo $data->price; ?>₹</td>
                <td>
                  <img src="assets/images/service/<?php echo $data->image; ?>" width="100px" alt="Service Image" class="service-img">
                </td>
                <td class="text-center">
                  <a href="edit_service?edt_service=<?php echo $data->id; ?>" class="btn btn-primary">Edit</a>
                  <a href="delete?dlt_service=<?php echo $data->id; ?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- JS Libraries -->
<script src="./assets/libs/jquery/dist/jquery.min.js"></script>
<script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/sidebarmenu.js"></script>
<script src="./assets/js/app.min.js"></script>
<script src="./assets/libs/simplebar/dist/simplebar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

<!-- 🔍 Zoom Effect Script -->
<script>
  document.querySelectorAll('.service-img').forEach(img => {
    img.style.transition = 'transform 0.2s';
    img.style.display = 'block';
    img.style.margin = '0 auto';

    img.addEventListener('mouseenter', () => {
      img.style.transform = 'scale(2.5)';
    });

    img.addEventListener('mouseleave', () => {
      img.style.transform = 'scale(1)';
    });
  });
</script>

</body>
</html>