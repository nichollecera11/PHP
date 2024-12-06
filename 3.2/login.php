<?php
session_start(); //make it a habit to make it first
$title = 'POST Input';


require_once('./../inc/config.php');
require_once('./../inc/functions.php');

if (is_user_authenticated()) {
  redirect('/3.3/admin.php');
  die();
}


// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     output($_POST);
// }
// if you want to determine which form is submitted


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);  //checking if it's inputting a valid email address
  $password = $_POST['password'];

  // compare with data store
  if (authenticate_user($email, $password)) {
    $_SESSION['email'] = $email;
    redirect('/3.3/admin.php');
    die();


  } else {
    $status = "Invalid email or password";
  }



  if ($email == false) {
    $status = 'Please enter a valid email address';
  }
}

// if (isset($_POST['login'])) {
//     output($_POST);
// }
// if you want to change the $_POST variable just change the name in the input


include('./../inc/header.php');

?>


<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5">POST INPUT</h1>
    </div>
  </div>
  <div class="row">
    <form action="" method="POST">
      <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" type="text" name="email" id="email" />
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input class="form-control" type="password" name="password" id="password" />
      </div>
      <div class="form-group">
        <input type="submit" name="login" value="Login" />
      </div>
    </form>
  </div>
  <div class="row">
    <?php
    if (isset($status)) {
      echo $status;
    }
    ?>
  </div>
</div>



<?php include('./../inc/footer.php'); ?>

<!-- //always validate everything -->