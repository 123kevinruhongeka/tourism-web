<?php 

  require('Inc/essentials.php');
  require('Inc/db_config.php');

  session_start();
  if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
    redirect('dashboard.php'); 
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('Inc/links.php'); ?>
    <link rel="stylesheet" href="css/styles(1).css">
</head>
<body class="bg-success">

<?php 
 
   if(isset($_POST['login']))
   {
      $frm_data = filteration($_POST);
      
      $query = "SELECT * FROM `admin_crid` WHERE `admin_name`=? AND `admin_pass`=?";
      $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

      $res = select($query,$values,"ss");
      if($res->num_rows==1){
        $row = mysqli_fetch_assoc($res);
        $_SESSION['adminLogin'] = true;
        $_SESSION['adminId'] = $row['sr_no'];
        redirect('dashboard.php');
      }
      else{
        alert('error','Login Failed - Invalid Credentials!');
      }
   }

?>


<div class="container">
  <div class="form-container">
    <img src="assets/images/logo.jpg" alt="Logo" class="logo">
    <h2>Login</h2>
    <form action="#" method="POST">
      <div class="input-box">
        <span class="icon"><ion-icon name="mail"></ion-icon></span>  
        <input name="admin_name" type="text" required> 
        <label>Email</label>  
      </div>
      <div class="input-box">
        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
        <input name="admin_pass" type="password" required>
        <label>Password</label>        
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">
        Remember me </label>
        <a href="#">Forgot Password?</a> 
      </div>
        <button name="login" type="submit" class="Button">Login</button>
    </form>
    <p>Don't have an account? <a href="#">Register here</a></p>
 </div>
</div>


 

  <?php require('Inc/scripts.php'); ?>
</body>
</html>