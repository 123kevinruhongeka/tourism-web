<?php 

require('../Inc/db_config.php');
require('../Inc/essentials.php');
adminLogin();

if(isset($_POST['get_general']))
{
  $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
  $values = [1];
  $res = select($q,$values,"i");
  $data = mysqli_fetch_assoc($res);
  $json_data = json_encode($data);
  echo $json_data;
}

if(isset($_POST['upd_general']))
{
  $frm_data = filteration($_POST); 
  
  $q = "UPDATE `settings` SET `site_title`=?,`site_about`=? WHERE `sr_no`=?";
  $values = [$frm_data['site_title'],$frm_data['site_about'],1];
  $res = update($q,$values,'ssi');
  echo $res;
}

if(isset($_POST['upd_shutdown']))
{
  $frm_data = ($_POST['upd_shutdown']==0) ? 1 : 0; 
  
  $q = "UPDATE `settings` SET `shutdown`=? WHERE `sr_no`=?";
  $values = [$frm_data,1];
  $res = update($q,$values,'ii');
  echo $res;
}

if(isset($_POST['get_contacts']))
{
  $q = "SELECT * FROM `contacts_details` WHERE `sr_no`=?";
  $values = [1];
  $res = select($q,$values,"i");
  $data = mysqli_fetch_assoc($res);
  $json_data = json_encode($data);
  echo $json_data;
}

if(isset($_POST['upd_contacts']))
{
  $frm_data = filteration($_POST); 
  
  $q = "UPDATE `contacts_details` SET `address`=?,`gmap`=?,`pn1`=?,`pn2`=?,`email`=?,`fb`=?,`tw`=?,`insta`=?,`lnk`=?,`iframe`=? WHERE `sr_no`=?";
  $values = [$frm_data['address'],$frm_data['gmap'],$frm_data['pn1'],$frm_data['pn2'],$frm_data['email'],$frm_data['fb'],$frm_data['insta'],$frm_data['tw'],$frm_data['lnk'],$frm_data['iframe'],1];
  $res = update($q,$values,'ssssssssssi');
  echo $res;
}

if(isset($_POST['add_member']))
{
  $frm_data = filteration($_POST);

  $img_r = uploadImage($_FILES['picture'],ABOUT_FOLDER); 

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
    $q = "INSERT INTO `team_details`(`name`, `position`, `picture`) VALUES (?,?,?)";
    $values = [$frm_data['name'],$frm_data['position'],$img_r];
    $res = insert($q,$values,'sss');
    echo $res;
  }
}

if(isset($_POST['get_members']))
{
  $res = selectAll('team_details'); 
  
  while($row = mysqli_fetch_assoc($res))
  {
    $path = ABOUT_IMG_PATH;
    echo <<<data
      <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 6" style="width: 250.5px; margin-right: 15px;">
        <div class="teams-card">
          <img decoding="async" src="https://triprex.b-cdn.net/wp-content/themes/triprex/assets/img/home2/teams-card-bg.png" alt="team-image">
          <div class="teams-img">
          <img decoding="async" src="$path$row[picture]" alt="team-image">
          </div>
          <div class="card-img-overlay text-end">
            <button type="button" onclick="rem_member($row[sr_no])" class="btn btn-danger btn-sm shadow-none">
              <i class="bi bi-trash"></i> Delete
            </button>
          </div>
          <div class="teams-content mb-0">
            <h4>$row[name]</h4>
            <span>$row[position]</span>
          </div>
          <ul class="social-list">
            <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
            <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
            <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
            <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    data;
  }
}

if(isset($_POST['rem_member']))
{
  $frm_data = filteration($_POST);
  $values = [$frm_data['rem_member']];
  
  $pre_q = "SELECT * FROM `team_details` WHERE `sr_no`=?";
  $res = select($pre_q,$values,'i');
  $img = mysqli_fetch_assoc($res);

  if(deleteImage($img['picture'],ABOUT_FOLDER)){
    $q = "DELETE FROM `team_details` WHERE `sr_no`=?";
    $res = delete($q,$values,'i');
    echo $res;
  }
  else{
    echo 0;
  }

}

?>