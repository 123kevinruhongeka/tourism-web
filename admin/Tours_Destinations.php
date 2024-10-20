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
    <title>Admin Panel - Tours & Destinations</title>
    <?php require('Inc/links.php'); ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper@3.20.0/dist/css/swiper.min.css">
    <link rel="stylesheet" href="css/styles(1).css">
</head>
<body class="bg-light">

  <?php require('Inc/header.php'); ?>


  <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        <h3 class="mb-4">TOURS & DESTINATIONS</h3> 


        <!-- Destination Section -->

        <!-- <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">


            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 clas="card-title m-0">Destinations</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#destination-s">
              <i class="bi bi-plus-circle"></i>Add
              </button>
            </div> 
           
            
            <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
              <table class="table table-hover border">
                <thead>
                  <tr class="bg-dark text-light">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="destinations-data">
                </tbody>
              </table>
            </div>  

          </div>
        </div> -->

        <!-- Tours Section -->

        <!-- <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">


            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 clas="card-title m-0">Tours</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#tour-s">
              <i class="bi bi-plus-circle"></i>Add
              </button>
            </div> 
           
            
            <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">  
              <table class="table table-hover border">
                <thead>
                  <tr class="bg-dark text-light">
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Location</th>
                    <th scope="col">Period</th>
                    <th scope="col" width="40%">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="tours-data">
                </tbody>
              </table>
            </div>  

          </div>
        </div>  -->



      </div>
    </div>
  </div>

  <!-- Destinations modal -->

  <!-- <div class="modal fade" id="destination-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form id="destination_s_form">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5">Add Destination</h1>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label fw-bold">Name</label>
              <input type="text" name="destination_name" class="form-control shadow-none" required>
            </div> 
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
            <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
          </div>
        </div>

      </form>
    </div>
  </div> -->

  <!-- Tours modal -->

  <!--  <div class="modal fade" id="tour-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form id="tour_s_form">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5">Add Tour</h1>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label fw-bold">Name</label>
              <input type="text" name="tour_name" class="form-control shadow-none" required>
            </div>
            <div class="mb-3">
              <label class="form-label fw-bold">Picture</label>
              <input type="file" name="tour_picture" accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none" required>  
            </div>
            <div class="mb-3">
              <label class="form-label fw-bold">Name</label>
              <input type="text" name="tour_name" class="form-control shadow-none" required>
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
  </div> -->


  <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">



        <!-- Management Team Section -->

        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 clas="card-title m-0">Tours Packages</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#tour-s">
              <i class="bi bi-plus-circle"></i>Add
              </button>
            </div>
            
            <div class="row" id="tour-data">
              
            </div>

          </div>
        </div>

        <!-- Management Team modal -->

        <div class="modal fade" id="tour-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form id="tour_s_form">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5">Add Tour</h1>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label fw-bold">Name</label>
                    <input type="text" name="tour_name" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold">Picture</label>
                    <input type="file" name="tour_picture" accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none" required>  
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold">Price</label>
                    <input type="number" name="tour_price" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold">Discount price</label>
                    <input type="number" name="tour_discount" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold">Location</label>
                    <input type="text" name="tour_loc" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold">Period</label>
                    <input type="number" name="tour_period" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold">Booking</label>
                    <input type="text" name="tour_booking" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-bold">Description</label>
                    <textarea name="tour_desc" class="form-control shadow-none" rows="3"></textarea>
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




      </div>
    </div>
  </div>



  <script>

    let tour_s_form = document.getElementById('tour_s_form');


    tour_s_form.addEventListener('submit',function(e){
      e.preventDefault();
      add_tour();
    });


    function add_tour() 
    {
      let data = new FormData();
      data.append('name',tour_s_form.elements['tour_name'].value);
      data.append('description',tour_s_form.elements['tour_desc'].value);
      data.append('picture',tour_s_form.elements['tour_picture'].files[0]);
      data.append('price',tour_s_form.elements['tour_price'].value);
      data.append('discount',tour_s_form.elements['tour_discount'].value);
      data.append('location',tour_s_form.elements['tour_loc'].value);
      data.append('period',tour_s_form.elements['tour_period'].value);
      data.append('Booking',tour_s_form.elements['tour_booking'].value);
      data.append('add_tour',''); 

      let xhr = new XMLHttpRequest();
        xhr.open("POST","ajax/tours_destinations.php",true);
      

      xhr.onload = function(){
          var myModal = document.getElementById('tour-s');
          var modal = bootstrap.Modal.getInstance(myModal);
          modal.hide();

        if(this.responseText == 'inv_img'){
          alert('error','only JPG and PNG images are allowed!');
        }
        else if(this.responseText == 'inv_size'){
          alert('error','Image should be less than 2MB');
        }
        else if(this.responseText == 'upd_failed'){
          alert('error','Image Upload failed Server Down!');
        }
        else{
          alert('success','New tour added!');
          tour_s_form.elements['tour_name'].value='';
          tour_s_form.elements['tour_desc'].value='';
          tour_s_form.elements['tour_picture'].files[0]='';
          tour_s_form.elements['tour_price'].value='';
          tour_s_form.elements['tour_discount'].value='';
          tour_s_form.elements['tour_loc'].value='';
          tour_s_form.elements['tour_period'].value='';
          tour_s_form.elements['tour_booking'].value='';
          get_tours();
        }

      }

      xhr.send(data); 

    }

    function get_tours()
    {
      let xhr = new XMLHttpRequest();
      xhr.open("POST","ajax/tours_destinations.php",true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onload = function(){
        document.getElementById('tour-data').innerHTML = this.responseText;
      }

      xhr.send('get_tours');
    }

    function rem_tour(val)
    {
      let xhr = new XMLHttpRequest();
      xhr.open("POST","ajax/tours_destinations.php",true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onload = function(){
        if(this.responseText==1){
          alert('success','Tour Removed!');
          get_tours();
        }
        else{
          alert('error','Server Down!');
        }
        
      }

      xhr.send('rem_tour='+val);
    }


    window.onload = function(){
    get_tours();
    }

  </script>


  


<?php require('Inc/scripts.php'); ?> 
<!-- <script src="scripts/tours_facilities.js"></script> -->

</body>
</html>