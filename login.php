<?php
include 'admin/inc/header.php';
include './classes/userlogin.php';
?>
<?php
$class = new userlogin();
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $User = $_POST['User'];
  $Pass = $_POST['Pass'];

  $login_check = $class->login_user($User,$Pass);

}
?>
<form action="login.php" method="post">
  <h1>Đăng nhập</h1>
 <span>
 <?php
    if(isset($login_check)){
   echo $login_check;
    }
  ?>

 </span>
    <div class="container">
      <label ><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="User" >
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Pass">
  
      <button type="submit">Login</button>
    </div>
  
    <div class="container" style="background-color: #dddddd">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>