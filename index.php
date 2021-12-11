<!DOCTYPE html>
<html lang="en">
<head>
	 <title>Picdrive</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   <link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/animate.css">
    <link rel="stylesheet" href="style/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body style="background:#FCD0CF;" class="animated fadeIn slower">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 p-0">
			<img src="images/main_pic.jpg" alt="main_pic" class="shadow-lg w-100" >
		</div>
		<div class="col-md-4 p-4">
			<h3 class="ml-2 mb-4">SIGN UP</h3>


			<form autocomplete="off" id="signup-form">
				<input type="text" name="username" id="username" placeholder="ENTER YOUR NAME" required="required">
				<div id="email-box">
				<input type="email" name="email" id="email" placeholder="EMAIL" required="required">
                 <i class="fa fa-circle-o-notch fa-spin d-none email-loader" style="font-size:23px;"></i>
			</div>
				<div id="password-box">
				<input type="password" name="password" id="password" placeholder="PASSWORD" required="required">
				<i class="fa fa-eye show-icon" style="font-size: 23px"></i>
			</div>



			
				<button class="float-left btn p-0 gen-imp-btn" type="button">CLICK GENERATE IMPROVE TO SECURITY</button>
				<button class="float-right btn generate-btn" type="button">GENERATE</button>
				<button class="btn submit-btn m-3" type="submit" disabled="disabled">REGISTER NOW</button>
                  <br>
				
			</form autocomplete = "off">
			<div class="signup-notice p-2">
					
				</div>
			<div class="px-2 activator d-none">
				<span>Please check your email to get activation code</span>
				<input type="text" name="code" id="code" class="my-3" placeholder="Activation code">
				<button class="btn btn-dark activate-code">Activate now</button>
			</div>
		</div>
		<div class="col-md-4 p-4">
		<h3 class="ml-2 mb-4">LOGIN</h3>
        <form autocomplete="on" id="login-form">
        	<div id="email-box">
				<input type="email" name="email" id="login-email" placeholder="Username" required="required">
                 <i class="fa fa-circle-o-notch fa-spin d-none email-loader" style="font-size:23px;"></i>
			</div>
				<div id="password-box">
				<input type="password" name="password" id="login-password" placeholder="PASSWORD" required="required">
				<i class="fa fa-eye show-icon" style="font-size: 23px"></i>
			</div>

        <button class="btn login-submit-btn m-3 float-right" type="submit">LOGIN NOW</button>
                  
			</form>
			<br>
				<div class="login-notice p-2">
					
				</div>
			
			<div class="px-2 login-activator d-none">
				<span>Please check your email to get activation code</span>
				<input type="text" name="code" id="login-code" class="my-3" placeholder="Activation code">
				<button class="btn btn-dark login-activate-code">Activate now</button>
			</div>
			</div>
	</div>
</div>

<script src="js/ajax_random_pass.js"></script>
<script src="js/index.js"></script>
<script src="js/ajax_check_user.js"></script>
<script src="js/ajax_sign_up.js"></script>
<script src="js/ajax_activate.js"></script>
<script src="js/ajax_login.js"></script>
<script>alert()</script>

</body>
</html>  
  