<?php 
  require('Inc/essentials.php');
  require('Inc/db_config.php');
  adminLogin();

  
  if(isset($_GET['seen']))
  {
    $frm_data = filteration($_GET);

    if($frm_data['seen']=='all'){
      $q = "UPDATE `inquiries` SET `seen`=?";
      $values = [1]; 
      if(update($q,$values,'i')){
        alert('success','Marked all as read!');
      }
      else{
        alert('error','Operation Failed!');
      }
    }
    else{
      $q = "UPDATE `inquiries` SET `seen`=? WHERE `sr_no`=?";
      $values = [1,$frm_data['seen']]; 
      if(update($q,$values,'ii')){
        alert('success','Marked as read!');
      }
      else{
        alert('error','Operation Failed!');
      }
    }
  }

  if(isset($_GET['del']))
  {
    $frm_data = filteration($_GET);

    if($frm_data['del']=='all'){
      $q = "DELETE FROM `inquiries`"; 
      if(mysqli_query($con,$q)){
        alert('success','All data deleted!');
      }
      else{
        alert('error','Operation Failed!');
      }
    }
    else{
      $q = "DELETE FROM `inquiries` WHERE `sr_no`=?";
      $values = [$frm_data['del']]; 
      if(delete($q,$values,'i')){
        alert('success','Data deleted!');
      }
      else{
        alert('error','Operation Failed!');
      }
    }
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - User Queries</title>
    <?php require('Inc/links.php'); ?>
    <link rel="stylesheet" href="css/styles(1).css">
</head>
<body class="bg-light">

  <?php require('Inc/header.php'); ?>


  <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        <h3 class="mb-4">USER INQUIRIES</h3> 


        <!-- USER QUERIES Section -->

        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">


            <div class="text-end mb-4">
              <a href="?seen=all" class="btn btn-dark rounded-pill shadow-none btn-sm">
              <i class="bi bi-check2-all"></i> Mark all read
              </a>
              <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm">
              <i class="bi bi-trash3-fill"></i> Delete all read
              </a>
            </div> 
           
            
            <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
              <table class="table table-hover border">
                <thead class="sticky-top" >
                  <tr class="bg-dark text-light">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col" width="20%">Phone</th>
                    <th scope="col" width="30%">Message</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $q = "SELECT * FROM `inquiries` ORDER BY `sr_no` DESC";
                    $data = mysqli_query($con,$q);
                    $i=1;
                    
                    while($row = mysqli_fetch_assoc($data))
                    {
                      $seen='';
                      if($row['seen']!=1){
                        $seen = "<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-warning'>Mark as read</a>";
                      } 
                      $seen.="<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-1'>Delete</a>";

                      echo<<<query
                        <tr>
                          <td>$i</td>
                          <td>$row[name]</td>
                          <td>$row[email]</td>
                          <td>+250$row[phone]</td>
                          <td>$row[message]</td>
                          <td>$row[date]</td>
                          <td>$seen</td>
                        </tr>
                      query;
                      $i++;     
                    }
                  ?>
                  
                </tbody>
              </table>
            </div>  

          </div>
        </div>



      </div>
    </div>
  </div>


<?php require('Inc/scripts.php'); ?> 

</body>
</html>