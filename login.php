<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Login here| SAMS</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
  <?php
require_once 'core/init.php';
$email = ((isset($_POST['email']))?sanitize($_POST['email']):'');
$password = ((isset($_POST['password']))?sanitize($_POST['password']):'');

if($_POST){
	if(empty($_POST['email']) || empty($_POST['password'])){
				 $errors[] = 'You must provide email and password';
			 }

			 if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				 $errors[]= 'You must enter Valid email';
			 }
			 if(strlen($password) < 6){
				 $errors[] = 'Password must be at least 6 characters';
			 }

			 $query = $db->query("SELECT * FROM users WHERE email ='$email'");
			 $user = mysqli_fetch_assoc($query);
			 $userCount = mysqli_num_rows($query);
			 if($userCount <1){
				 $errors[]= 'That email does not Exist';
			 }

			 if(!password_verify($password, $user['password'])){
				 $errors[] = 'The password is wrong, please input Right password';
			 }

			 if(!empty($errors)){
				 echo display_errors($errors);
			 }else{
				 $user_id = $user['id'];
				 clogin($user_id);
         header('Location: lecturer.php');

			 }
}
?>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Login Now</h2>
                    <form method="POST">
                      <div class="input-group">
                          <input class="input--style-2" type="email" placeholder="Email" name="email">
                      </div>
                      <div class="input-group">
                          <input class="input--style-2" type="password" placeholder="Password" name="password">
                      </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">LOGIN</button>
                        </div>
                        <div class="p-t-30">
                        <li><b>Don't have an acoount.</b><a href="register.php">Register Here.</a></li>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
