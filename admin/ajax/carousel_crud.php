<?php 

require('../Inc/db_config.php');
require('../Inc/essentials.php');
adminLogin();


if(isset($_POST['add_image']))
{
  $frm_data = filteration($_POST);

  $img_r = uploadImage($_FILES['picture'],CAROUSEL_FOLDER); 

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
    $q = "INSERT INTO `carousel`(`name`, `quote`, `picture`) VALUES (?,?,?)";
    $values = [$frm_data['name'],$frm_data['quote'],$img_r];
    $res = insert($q,$values,'sss');
    echo $res;
  }
}

if(isset($_POST['get_carousel']))
{
  $res = selectAll('carousel'); 
  
  while($row = mysqli_fetch_assoc($res))
  {
    $path = CAROUSEL_IMG_PATH;
    echo <<<data
      <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 6" style="width: 250.5px; margin-right: 15px;">
        <div class="teams-card">
          <img decoding="async" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home2/teams-card-bg.png" alt="team-image">
          <div class="teams-img">
          <img decoding="async" src="$path$row[picture]" alt="team-image">
          </div>
          <div class="card-img-overlay text-end">
            <button type="button" onclick="rem_image($row[sr_no])" class="btn btn-danger btn-sm shadow-none">
              <i class="bi bi-trash"></i> Delete
            </button>
          </div>
          <div class="teams-content mb-0">
            <h4>$row[name]</h4>
            <span>$row[quote]</span>
          </div>
        </div>
      </div>
    data;
  }
}

if(isset($_POST['rem_image']))
{ 
  $frm_data = filteration($_POST);
  $values = [$frm_data['rem_image']];
  
  $pre_q = "SELECT * FROM `carousel` WHERE `sr_no`=?";
  $res = select($pre_q,$values,'i');
  $img = mysqli_fetch_assoc($res);

  if(deleteImage($img['picture'],CAROUSEL_FOLDER)){
    $q = "DELETE FROM `carousel` WHERE `sr_no`=?";
    $res = delete($q,$values,'i');
    echo $res;
  }
  else{
    echo 0;
  }

}

?>