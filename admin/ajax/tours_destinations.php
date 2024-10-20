<?php 

  require('../Inc/db_config.php');
  require('../Inc/essentials.php');
  adminLogin();


    if(isset($_POST['add_tour']))
  {
    $frm_data = filteration($_POST);

    $img_r = uploadImage($_FILES['picture'],TOURS_FOLDER); 

    if($img_r == 'inv_img'){
      echo $img_r;
    }
    else if($img_r == 'inv_size'){
      echo $img_r;
    }
    else if($img_r == 'upd_failed'){
      echo $img_r;
    }
    
    else{
      $q = "INSERT INTO `tours_details`(`name`, `description`, `picture`, `price`, `discount`, `location`, `period`, `Booking`) VALUES (?,?,?,?,?,?,?,?)";
      $values = [$frm_data['name'],$frm_data['description'],$img_r,$frm_data['price'],$frm_data['discount'],$frm_data['location'],$frm_data['period'],$frm_data['Booking']];
      $res = insert($q,$values,'ssssssss');
      echo $res;
    }
  }

  if(isset($_POST['get_tours']))
  {
    $res = selectAll('tours_details'); 
    
    while($row = mysqli_fetch_assoc($res))
    {
      $path = TOURS_IMG_PATH;
      echo <<<data
        <div class="col-lg-4 col-md-6">
          <div class="package-card">
            <div class="package-card-img-wrap">
              <div class="card-img-overlay text-end">
                <button type="button" onclick="rem_tour($row[id])" class="btn btn-danger btn-sm shadow-none">
                  <i class="bi bi-trash"></i> Delete
                </button>
              </div>
              <a href="$row[Booking]" class="card-img"><img loading="lazy" decoding="async" width="650" height="450" src="$path$row[picture]" class="attachment-card-thumb size-card-thumb wp-post-image" alt /></a>
              <div class="batch">
                <span class="date">$row[period] DAYS</span>
                <div class="location">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                  <path d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z"></path>
                  </svg>
                  <ul class="location-list">
                  <li><a href="#"> $row[location]</a></li>	
                </div>
              </div>
            </div>
            <div class="card-img-overlay text-end">
              <button type="button" onclick="rem_tour($row[id])" class="btn btn-danger btn-sm shadow-none">
                <i class="bi bi-trash"></i> Delete
              </button>
            </div>
            <div class="package-card-content">
              <div class="card-content-top">
                <h5>
                  <a href="">
                   $row[name]
                  </a>
                </h5>	
                <div class="location-area">
                  <ul class="location-list scrollTextAni">
                  <li><a href="https://triprex.egenslab.com/location/saint-martin/">Akagera Park</a></li>
                  <li><a href="https://triprex.egenslab.com/location/khagrachori/">Lake Ihema</a></li>
                  <li><a href="https://triprex.egenslab.com/location/coxs-bazar/">Game Drive</a></li>
                  <li><a href="https://triprex.egenslab.com/location/bandar-ban/">Kigali City</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-content-bottom">
                <div class="price-area">
                  <h6>Starting From:</h6>
                  <span>&#36;$row[price]<del>&#36;$row[discount]</del></span> <p>TAXES INCL/PERS</p>
                </div>
                <a href="" class="primary-btn2">Book A Trip <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                  <path d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z"></path>
                  <path d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>


      data;
    }
  }

  if(isset($_POST['rem_tour']))
  {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_tour']];
    
    $pre_q = "SELECT * FROM `tours_details` WHERE `id`=?";
    $res = select($pre_q,$values,'i');
    $img = mysqli_fetch_assoc($res);

    if(deleteImage($img['picture'],TOURS_FOLDER)){
      $q = "DELETE FROM `tours_details` WHERE `id`=?";
      $res = delete($q,$values,'i');
      echo $res;
    }
    else{
      echo 0;
    }

  }

  /* if(isset($_POST['add_facility']))
    {
      $frm_data = filteration($_POST);

      $img_r = uploadSVGImage($_FILES['icon'],HOTELS_FOLDER); 

      if($img_r == 'inv_img'){
        echo $img_r;
      }
      else if($img_r == 'inv_size'){
        echo $img_r;
      }
      else if($img_r == 'upd_failed'){
        echo $img_r;
      }
      else{
        $q = "INSERT INTO `facilities`(`icon`,`name`, `description`) VALUES (?,?,?)";
        $values = [$img_r,$frm_data['name'],$frm_data['description']];
        $res = insert($q,$values,'sss');
        echo $res;
      }
    }

    if(isset($_POST['get_facilities']))
    {
      $res = selectAll('facilities'); 
      $i=1;
      $path = HOTELS_IMG_PATH;
      
      while($row = mysqli_fetch_assoc($res))
      {
        echo <<<data
          <tr class='align-middle'>
          <td>$i</td>
          <td><img src="$path$row[icon]" width="60px"></td>
          <td>$row[name]</td>
          <td>$row[description]</td>
          <td>
              <button type="button" onclick="rem_facility($row[id])" class="btn btn-danger btn-sm shadow-none">
                <i class="bi bi-trash"></i> Delete
              </button>
          </td> 
          </tr>
        data;
        $i++;
      }
    }

    if(isset($_POST['rem_facility']))
    {
      $frm_data = filteration($_POST);
      $values = [$frm_data['rem_facility']];


      $pre_q = "SELECT * FROM `facilities` WHERE `id`=?";
      $res = select($pre_q,$values,'i');
      $img = mysqli_fetch_assoc($res);

      if(deleteImage($img['icon'],HOTELS_FOLDER)){
        $q = "DELETE FROM `facilities` WHERE `id`=?";
        $res = delete($q,$values,'i');
        echo $res;
      }
      else{
        echo 0;
      }

    } */

?>