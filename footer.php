<!-- ============================ Footer Start ================================== -->
<?php

//index.php

//Include Configuration File


$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'"><img class="widget-title text-center" src="assets/img/google-signin.png" alt="google-signin" style="width:237px;margin-bottom: 30px;"></a>';
}






?>


			<footer class="dark-footer skin-dark-footer">
				<div>
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<div class="footer-widget">
									<img class="widget-title" src="assets/img/logo.png" alt="" style="width:137px">
									<p> </p>
									<p>Follow & Subscribe your email to get new business tips.</p>
									<ul class="footer-bottom-social">
										<li><a href="#"><i class="ti-facebook"></i></a></li>
										<li><a href="#"><i class="ti-instagram"></i></a></li>
									</ul>
									
									<form class="f-newsletter mt-4" >
										<input type="email" class="form-control sigmup-me" placeholder="Your Email Address" required="required">
										<button type="submit" class="btn"><i class="ti-arrow-right"></i></button>
									</form>
								</div>
							</div>
							<div class="col-md-9">
								<div class="row">
									<div class="col-lg-3 col-md-3">
										<div class="footer-widget">
											<h4 class="widget-title">SOCIALPEDIA</h4>
											<ul class="footer-menu">
												<li><a href="/SocialPedia/about">About us</a></li>
												<li><a href="#">Press</a></li>
												<li><a href="#">Affiliate</a></li>
												<li><a href="#">Careers</a></li>
											</ul>
										</div>
									</div>		
									<div class="col-lg-3 col-md-3">
										<div class="footer-widget">
											<h4 class="widget-title">FEATURES</h4>
											<ul class="footer-menu">
												<li><a href="/SocialPedia/influencer-search">Find Influencers</a></li>
												<li><a href="#">Influencer Marketing</a></li>
												<li><a href="#">Platform</a></li>
												<li><a href="/SocialPedia/influencer-search">Influencer Search</a></li>
												<li><a href="/SocialPedia/influencer-statistic">Influencer Statistics</a></li>
											</ul>
										</div>
									</div>
									<div class="col-lg-3 col-md-3">
										<div class="footer-widget">
											<h4 class="widget-title">TOP STORIES</h4>
											<ul class="footer-menu">
												<li><a href="#">Instagram Influencers</a></li>
												<li><a href="#">Youtube Influencers</a></li>
												<li><a href="#">Social Media Influencers</a></li>
												<li><a href="#">Micro Influencers</a></li>
												<li><a href="#">How to Find Instagram</a></li>
												<li><a href="#">Influencers</a></li>
											</ul>
										</div>
									</div>
									<div class="col-lg-3 col-md-3">
								<div class="footer-widget">
									<h4 class="widget-title">RESOURCES</h4>
									<ul class="footer-menu">
										<li><a href="/SocialPedia/plans">Pricing</a></li>
										<li><a href="/SocialPedia/blogs">Blog</a></li>
										<li><a href="#">Help Center</a></li>
										<li><a href="#">Influencer Marketing Guide</a></li>
										<li><a href="#">Rankings</a></li>
									</ul>
								</div>
							</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							
							<div class="col-lg-2 col-sm-2">
								<p class="mb-0">SocialPedia Inc. ©2020</p>
							</div>
							<div class="col-lg-2 col-sm-2">
								<a href="#">Terms of Service</a>
							</div>
							<div class="col-lg-2 col-sm-2">
								<a href="#">Privacy Policy</a>
							</div>
							<div class="col-lg-2 col-sm-2">
								<a href="#">Cookie Policy</a>
							</div>
							<div class="col-lg-2 col-sm-2">
								<a href="#">Sitemap</a>
							</div>
							<div class="col-lg-2 col-sm-2">
								<a href="#">Legal Notice</a>
							</div>
							
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
			
			
			<!-- Sign Up Modal -->
			<div class="modal fade signup" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="sign-up">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						
						<div class="modal-body">
							<div class="col-md-12 text-center"><a referrerpolicy="origin" href="/"><img class="widget-title text-center" src="assets/img/logo.png" alt="logo" style="width:137px;margin-bottom: 30px;"></a></div>
							
							<h2 class="text-center" style="margin: 30px;">Get started for free</h2>
							
							<div class="col-md-12 text-center"><?php echo $login_button; ?></div>
							<div class="center-separator mt-5">OR</div><br>
							<div class="login-form">
								<form action="" method="post">
									
									<div class="row">
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="First Name" name="fname" required onkeypress="return /[a-z]/i.test(event.key)">
													<i class="ti-user"></i>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Last Name" name="lname" required onkeypress="return /[a-z]/i.test(event.key)">
													<i class="ti-user"></i>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="email" class="form-control" placeholder="Work email" name="email" required>
													<i class="ti-email"></i>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="123 546 5847" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" name="mobile">
													<i class="lni-phone-handset"></i>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="password" id="txtNewPassword" class="form-control" placeholder="Enter Password" required name="password">
													<i class="ti-unlock"></i>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="password" class="form-control" id="txtConfirmPassword" placeholder="Enter Confirm password" required name="password_confirm">
													<i class="ti-unlock"></i>
												</div>
											</div>
											
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="registrationFormAlert" style="color:red;padding:10px" id="CheckPasswordMatch"></div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Enter Company Name" name="company_name">
													<i class="fa fa-industry"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<div class="input-with-icon">
													<select class="form-control" name="employees">
														<option value="">Select Number of employees</option>
														<option value="1">1</option>
														<option value="2-10">2-10</option>
														<option value="11-50">11-50</option>
														<option value="51-200">51-200</option>
														<option value="200">> 200</option>
													</select>
													<i class="ti-briefcase"></i>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<div class="input-with-icon">
													<select id="" class="form-control" name="organization_type">
														<option value="">Select Organization type</option>
														<option value="Agency">Agency</option>
														<option value="B2B Brand">B2B Brand</option>
														<option value="B2C Brand">B2C Brand</option>
														<option value="Ecommerce">Ecommerce</option>
														<option value="Influencer">Influencer</option>
														<option value="Other">Other</option>
													</select>
													<i class="fa fa-industry"></i>
												</div>
											</div>
											
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<div class="row">
													<div class="col-lg-12 col-md-12">
														<div class="o-features">
															<ul class="no-ul-list">
																<li>
																	<input id="a-1" class="checkbox-custom" name="privacy_policy" type="checkbox" required value="I accept to Privacy Policy of Socialpeida">
																	<label for="a-1" class="checkbox-custom-label">* By creating this account you accept our Privacy Policy</label>
																</li>
																
															</ul>
														</div>
													</div>
													<div class="col-lg-12 col-md-12">
														<div class="o-features">
															<ul class="no-ul-list">
																
																<li>
																	<input id="a-2" class="checkbox-custom" name="communications" type="checkbox" required value="I accept to receive communications from Socialpeida.">
																	<label for="a-2" class="checkbox-custom-label" >I accept to receive communications from Socialpeida</label>
																</li>
																
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</button>
									</div>
								
								</form>
							</div>
							
							<div class="text-center">
								<p class="mt-5"><i class="ti-user mr-1"></i>Already Have An Account? <a href="#" data-toggle="modal" data-target="#signup">Go For LogIn</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<div class="col-md-12 text-center"><a referrerpolicy="origin" href="/"><img class="widget-title text-center" src="assets/img/logo.png" alt="logo" style="width:137px;margin-bottom: 30px;"></a>
							</div>
							
							<h2 class="text-center" style="margin: 30px;">Log in to Socialpedia</h2>
							<div class="col-md-12 text-center"><?php echo $login_button; ?></div>
							<div class="center-separator mt-5">OR</div><br>
							<div class="login-form">
								<form action="" method="post">
								
									<div class="form-group">
										<label>Email</label>
										<div class="input-with-icon">
											<input type="email" class="form-control" placeholder="Enter Register Email" name="email" required>
											<i class="ti-email"></i>
										</div>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon">
											<input type="password" class="form-control" placeholder="Enter Your Password" name="password" required>
											<i class="ti-unlock"></i>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" name="login" class="btn btn-primary"><i class="fa fa-sign-in-alt" aria-hidden="true"></i> Login</button>
									</div>
								
								</form>
							</div>
							
							<div class="text-center">
								<p class="mt-5"><a href="#" data-toggle="modal" data-target="#forget">Forgot password?</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- forget password In Modal -->
			<div class="modal fade" id="forget" tabindex="-1" role="dialog" aria-labelledby="forgrtmodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<div class="col-md-12 text-center"><a referrerpolicy="origin" href="/"><img class="widget-title text-center" src="assets/img/logo.png" alt="logo" style="width:137px;margin-bottom: 30px;"></a>
							</div>
							
							<h3 class="text-center" style="margin: 30px;">Forgrt Password in to Socialpedia</h3>
							<div class="login-form">
								<form action="" method="post">
								
									<div class="form-group">
										<label>Email</label>
										<div class="input-with-icon">
											<input type="email" class="form-control" placeholder="Enter Register Email" name="email" required>
											<i class="ti-email"></i>
										</div>
									</div>
									
									<div class="form-group">
										<label>New Password</label>
										<div class="input-with-icon">
											<input type="password" class="form-control" placeholder="Enter Your Password" name="password" required>
											<i class="ti-unlock"></i>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" name="forget" class="btn btn-primary"><i class="fa fa-sign-in-alt" aria-hidden="true"></i> Submit</button>
									</div>
								
								</form>
							</div>
							
							<div class="text-center">
								<p class="mt-5"><a href="/SocialPedia/" class="link">Login Here </a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->

			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->
		
		

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/rangeslider.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/aos.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/slider-bg.js"></script>
		<script src="assets/js/lightbox.js"></script> 
		<script src="assets/js/imagesloaded.js"></script>
		<script src="assets/js/isotope.min.js"></script>
		<script src="assets/js/coreNavigation.js"></script>
		<script src="assets/js/custom.js"></script><script src="assets/js/cl-switch.js"></script>
		
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
		
		<script>
    function checkPasswordMatch() {
        var password = $("#txtNewPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    }
    $(document).ready(function () {
       $("#txtConfirmPassword").keyup(checkPasswordMatch);
    });
	$('#forget').click(function() {

    $("#login").modal("hide");});
    </script>

<?php
		
if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=md5($_POST['password']);
  $company_name=$_POST['company_name'];
  $employees=$_POST['employees'];
  $organization_type=$_POST['organization_type'];
  $privacy_policy=$_POST['privacy_policy'];
  $communications=$_POST['communications'];

  $result = mysqli_query($conn,"SELECT * FROM user");
  while($row=mysqli_fetch_array($result)){
    
      $emailreg = $row['email'];
      
      if($email==$emailreg)  {
          $emailreg2 = $row['email'];
    }
    
  }

  if($email==$emailreg2) {
    
 
  echo '<script type="text/javascript">'
    . '$( document ).ready(function() {'
    . '$("#regfail").modal("show");'
    . '});'
    . '</script>'; 
  

  }
  else{

  echo $qry="insert into user (fname,lname,email,mobile,password,company_name,employees,organization_type,privacy_policy,communications)values('$fname','$lname','$email','$mobile','$password','$company_name','$employees','$organization_type','$privacy_policy','$communications')";  
  mysqli_query($conn,$qry)  or die('Error Inserting database');

  echo '<script type="text/javascript">'; 
  echo 'alert("Registration Completed Please login");'; 
  echo 'window.location.href = "/SocialPedia/";';
  echo '</script>';
  echo $_SESSION['username'] = $fname;
  }

}

if(isset($_POST['login'])){

	$pass = md5($_POST['password']);
	$email= $_POST['email'];

	$result = mysqli_query($conn,"SELECT * FROM user WHERE email='" . $email . "' and password= '". $pass."'");
	$row  = mysqli_fetch_array($result);
	echo $id = $row['id'];
	if($id>0) {
	
	$_SESSION["user_id"] = $row['id'];
	$_SESSION["user_fname"] = $row['fname'];

	$_SESSION["login_message"] = "Welcome to gopal";
	echo '<script type="text/javascript">'
	. 'window.location.href = "../SocialPedia/user";'
	. '</script>'; 	
	}

	
	else{

	$_SESSION["login_message"] = "Your Credential Information Is Invalid!";
	echo '<script type="text/javascript">'
	. '$( document ).ready(function() {'
	. '$("#loginfail").modal("show");'
	. '});'
	. '</script>'; 	
	}
}
?>
<!-- reg. fail In Modal -->
<div class="modal fade" id="regfail" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
		<div class="modal-content" id="registermodal">
			<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
			<div class="modal-body">
				<div class="col-md-12 text-center">
					<h3 style="color:red">your Email already registeres please login</h3>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->
<!-- login. fail In Modal -->
<div class="modal fade" id="loginfail" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
		<div class="modal-content" id="registermodal">
			<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
			<div class="modal-body">
				<div class="col-md-12 text-center">
					<h3 style="color:red"><?php echo $_SESSION["login_message"]; ?></h3>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->
</body>
<!-- Copied from http://codeminifier.com/rikada-template/rikada/home-2.html by Cyotek WebCopy 1.7.0.600, Monday, September 23, 2019, 2:46:24 PM -->
</html>