
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/login/') ?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/') ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/') ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/') ?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/') ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/') ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/') ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/') ?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				
					<span class="login100-form-title p-b-55">
						Login
					</span>
				<div id="infoMessage"><?php echo $message;?></div>
        		<?php echo form_open("auth/login");?>
					<!-- <span class="login100-form-title p-b-55">
						Login
					</span> -->

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
            			<input class="input100" type="text" name="identity" id="identity" value="<?php echo set_value('identity');?>"  placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
            			<input class="input100" type="password" name="password" id="password" value="<?php echo set_value('password');?>" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					<div class="contact100-form-checkbox m-l-4">
						<label>
						<?php echo form_checkbox('remember','1',FALSE);?> Remember me
						</label>
					</div>
					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn">
							Login
						</button>
          			</div>

          			<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>

					<div class="text-center w-full p-t-80">
						<span class="txt1">
							Not a member?
						</span>

						<a class="txt1 bo1 hov1" href="create_user">
							Sign up now							
						</a>
          			</div>
          		<?php echo form_close();?>
				
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->	
	<script src="<?php echo base_url('assets/login/') ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/') ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url('assets/login/') ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/') ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/login/') ?>js/main.js"></script>

</body>
</html>