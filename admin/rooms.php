<?php 
  require('Inc/essentials.php');
  require('Inc/db_config.php');
  adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Rooms</title>
    <?php require('Inc/links.php'); ?>
    <link rel="stylesheet" href="css/styles(1).css">
</head>
<body class="bg-light">

  <?php require('Inc/header.php'); ?>


  <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        <h3 class="mb-4">ROOMS</h3> 


        <!-- Features Section -->

        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">


            <div class="text_end mb-3">
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#add-rooms">
              <i class="bi bi-plus-circle"></i>Add
              </button>
            </div> 
           
            
            <div class="table-responsive-lg" style="height: 350px; overflow-y: scroll;">
              <table class="table table-hover border">
                <thead>
                  <tr class="bg-dark text-light">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Area</th>
                    <th scope="col">Guests</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="room-data">
                </tbody>
              </table>
            </div>  

          </div>
        </div>

        
      </div>
    </div>
  </div>

  <!-- Add room modal -->

  <div class="modal fade" id="add-room" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form id="add_room_form">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title">Add Room</h1>
          </div>
          <div class="modal-body">
            <div class="col-md-6mb-3">
              <label class="form-label fw-bold">Name</label>
              <input type="text" name="name" class="form-control shadow-none" required>
            </div> 
            <div class="col-md-6mb-3">
              <label class="form-label fw-bold">Location</label>
              <input type="number" name="area" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6mb-3">
              <label class="form-label fw-bold">Price</label>
              <input type="number" name="price" class="form-control shadow-none" required>
            </div>
            <div class="col-md-6mb-3">
              <label class="form-label fw-bold">Quantity</label>
              <input type="number" name="quantity" class="form-control shadow-none" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
            <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
          </div>
        </div>

      </form>
    </div>
  </div>

  <!-- Facilities modal -->

  <div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form id="facility_s_form">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5">Add Facility</h1>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label fw-bold">Name</label>
              <input type="text" name="facility_name" class="form-control shadow-none" required>
            </div>
            <div class="mb-3">
              <label class="form-label fw-bold">Icon</label>
              <input type="file" name="facility_icon" accept=".svg" class="form-control shadow-none" required>  
            </div>
            <div class="mb-3">
              <label class="form-label fw-bold">Description</label>
              <textarea name="facility_desc" class="form-control shadow-none" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
            <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
          </div>
        </div>

      </form>
    </div>
  </div>


<?php require('Inc/scripts.php'); ?> 
<script src="scripts/features_facilities.js"></script>

</body>
</html>