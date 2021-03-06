<?php 
session_start(); // imp ! always place it in start 
//if user is already logged in means email is set in session hence direct him to download page

if(isset($_SESSION["email"]))
	{
		header("Location: /Edubuntu-Initiative/Login_v1/download.php");
		die();
	}
?>
<?php include('header.php'); ?>	

	
<!----2nd template starts from here -->
	
	<div class="limiter">
		<div class="container-login100" style="padding-top:70px;">
			<div class="wrap-login100" style="padding-top:70px;">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="login_validate.php" method="get">
					<span class="login100-form-title">
						Student Login
					</span>
					<!--mohit -->
					<!-- https://www.webdeveloper.com/d/116317-how-to-pass-a-parameter-from-one-html-page-to-another-html-page/6-->
					<div  id="message" style='display: none'>
						 Indicates a message  that was sent by server such as invalid password etc.
					</div>
					
<script>
function checkmsg() {
var a = window.location.toString();
a = a.substring(a.indexOf('error=')+6);
if (a==='no_user') {
document.getElementById("message").innerHTML="<strong>NO USER FOUND</strong>";
document.getElementById("message").style.display="block";
document.getElementById("message").className="alert alert-warning";
}
else if(a=='invalid_pass')
{
document.getElementById("message").innerHTML="<strong>INVALID PASSWORD</strong>";
document.getElementById("message").style.display="block";
document.getElementById("message").className="alert alert-danger";
}
else if(a=='download')
{
document.getElementById("message").innerHTML="<strong>Please login first to download</strong>";
document.getElementById("message").style.display="block";
document.getElementById("message").className="alert alert-danger";
};
};
window.onload=checkmsg();
</script>

					
<!--mohit -->
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<input  type="hidden" name="type" value="student">
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" >
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							<!--Forgot Password -->
						</span>
						<a class="txt2" href="#">
							<!-- Username / Password? -->
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="/Edubuntu-Initiative/Login_v1/register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>