<?php
//include header file
include('include/header.php');

?>
<?php
if (isset($_POST['submit'])) {

	if (isset($_POST['term']) === true) {

		if (isset($_POST['name']) && !empty($_POST['name'])) {

			$name = $_POST['name'];

		}

	} else {
		$nameError = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Please fill the name field</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	}

	if (isset($_POST['gender']) && !empty($_POST['gender'])) {
		$gender = $_POST['gender'];

	} else {
		$genderError = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  		<strong>Please Select Gender.</strong>
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>';
	}



	if (isset($_POST['day']) && !empty($_POST['day'])) {
		$day = $_POST['day'];

	} else {
		$dayError = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  		<strong>Please Select Day.</strong>
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
		</div>';
	}

	if (isset($_POST['month']) && !empty($_POST['month'])) {
		$month = $_POST['month'];

	} else {
		$monthError = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  		<strong>Please Select month.</strong>
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
<		</div>';
	}

	if (isset($_POST['year']) && !empty($_POST['year'])) {
		$year = $_POST['year'];

	} else {
		$yearError = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Please Select Year .</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	}

	if (isset($_POST['city']) && !empty($_POST['city'])) {

		$city = $_POST['city'];



	} else {
		$cityError = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Please fill the city field</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	}


	if (isset($_POST['blood_group']) && !empty($_POST['blood_group'])) {
		$blood_group = $_POST['blood_group'];

	} else {
		$blood_groupError = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Please Select Blood group.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

	}
	if (isset($_POST['contact_no']) && !empty($_POST['contact_no'])) {
		$contact = $_POST['contact_no'];


	} else {
		$contactError = '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Please fill the contact no field</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
	}


	if (isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password']) && !empty($_POST['c_password'])) {

		if (strlen($_POST['password']) >= 6) {

			if ($_POST['password'] == $_POST['c_password']) {
				$password = $_POST['password'];
			} else {
				$passwordError = '<div class="alert alert-danger alert-dismissible
					fade show" role="alert">
					<strong>Passwords are not same.</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times; </span>
					</button>
					</div>';

			}
		} else {
			$passwordError = '<div class="alert alert-success alert-dismissible fade show" role="alert">
		  <strong>Password should consist of 6 characters.</strong>
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>';
		}

	} else {
		$passwordError = '<div class="alert alert-success alert-dismissible fade show" role="alert">
	  <strong>Please fill password.</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>';
	}

	if (isset($_POST['email']) && !empty($_POST['email'])) {
		$email = $_POST['email'];
	} else {
		$emailError = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>Please fill the email field</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  			</button>
			</div>';
	}

	if(isset($city)=="ILS Hospital")
	{
		$hosno="03340880000";
		$url="https://www.google.com/maps/dir/0/ILS+Hospitals,+Howrah,+Doctor+Abani+Dutta+Road,+opposite+Golabari,+PS,+Howrah,+West+Bengal/@22.592966,88.3033317,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a0277c1f2f67309:0x2d4ba68221440468!2m2!1d88.3445316!2d22.592892!3e0?authuser=0&entry=ttu";
	}
	else if(isset($city)=="Chakdah General Hospital")
	{
		$hosno="9925526889";
		$url="https://www.google.com/maps/dir//3GFG%2B7GR+Chakdaha+State+General+Hospital,+Locality:,+Rabindranagar,+Rajbagan,+Chakdaha,+West+Bengal+741222/@23.073233,88.523696,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f8c17195aaaaab:0x26238a122339a6f4!2m2!1d88.5262709!2d23.0732281!3e0?authuser=0&entry=ttu";
	}
	else if(isset($city)=="Calcutta Medical Research Institute")
	{
		$hosno="03322551614";
		$url="https://www.google.com/maps/dir//The+Calcutta+Medical+Research+Institute,+Diamond+Harbour+Road,+New+Alipore,+Kolkata,+West+Bengal/@22.5322438,88.2866025,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a0277596a6eacc7:0xbf6e76f5b5566257!2m2!1d88.3278024!2d22.5321698!3e0?authuser=0&entry=ttu";
	}
	else if(isset($city)=="BN Bose Hospital")
	{
		$hosno="03325923676";
		$url="https://www.google.com/maps/dir//Dr.+B.N+Basu,+Barrackpore+Trunk+Rd,+Cantonment,+Barrackpore,+West+Bengal+700120/@22.7405883,88.3756594,14z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f89bada8273b8d:0x10e221c0fcace736!2m2!1d88.37052!2d22.7514!3e0?authuser=0&entry=ttu";
	}
	else if(isset($city)=="City Hospital")
	{
		$hosno="9875472239";
		$url="https://www.google.com/maps/dir//PGJ2%2B6Q7,+AH1,+Kazipara,+Uttar+Seethi,+Kolkata,+West+Bengal+700124/@22.7301149,88.4192735,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x39f8a320183f4f6f:0xa9d385bcb2299909!2m2!1d88.5016751!2d22.730136?entry=ttu";
	}
	else if(isset($city)=="Apollo Hospital")
	{
		$hosno="03344202122";
		$url="https://www.google.com/maps/dir//Apollo+Multispeciality+Hospitals,+Kolkata,+58,+Canal+Circular+Rd,+Kadapara,+Phool+Bagan,+Kankurgachi,+Kolkata,+West+Bengal+700054/@22.5747574,88.3990153,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3a0277b5341e8edf:0x620ba314896272e1!2m2!1d88.4015902!2d22.5747525!3e0?authuser=0&entry=ttu";
	}
	else if(isset($city)=="Charu Hospital")
	{
		$hosno="03473245333";
		$url="https://www.google.com/maps/dir//Charu+health+point+nursing+home,+Nikunja+bhavan,+Chakdaha+Bonogram+Rd,+Lalpur,+Chakdaha,+West+Bengal+741222/@23.0766998,88.53169,15.75z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f8c1577a62e475:0x219589b19665e39e!2m2!1d88.5342492!2d23.0796335!3e0?authuser=0&entry=ttu";
	}
	else if(isset($city)=="GNRC Hospital")
	{
		$hosno="8100974444";
		$url="https://www.google.com/maps/dir//GNRC+Hospitals,+Barasat,+Kolkata,+Kolkata+-+Basirhat+Road,+Koyra,+West+Bengal/@22.7092591,88.4999121,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f8a3e1fb51fae3:0xab43e89f50999e8!2m2!1d88.541112!2d22.7091852!3e0?authuser=0&entry=ttu";
	}
	else if(isset($city)=="Narayana Hospital")
	{
		$hosno="8067506907";
		$url="https://www.google.com/maps/dir//Narayana+Hospital,+Barasat,+Jessore+Road,+Barasat,+Kolkata,+West+Bengal/@22.7053488,88.4309734,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f8a20931000025:0x3fbae55f12a3238a!2m2!1d88.4721733!2d22.7052749!3e0?authuser=0&entry=ttu";
	}
	else if(isset($city)=="BMRC Hospital")
	{
		$hosno="03325014947";
		$url="https://www.google.com/maps/dir//BMRC+Hospital+:+Best+Cardiology+Hospitals+in+Kolkata,+Barrackpore+Trunk+Road,+Talpukur,+Titagarh,+Barrackpore,+West+Bengal/@22.7492131,88.33139,13z/data=!4m9!4m8!1m0!1m5!1m1!1s0x39f89bb207741f73:0x216e28c6b6101513!2m2!1d88.3725899!2d22.7491392!3e0?authuser=0&entry=ttu";
	}
	else
	{
		$url="Not found";
	}
	if (isset($name) && isset($blood_group) && isset($gender) && isset($blood_group) && isset($day) && isset($month) && isset($year) && isset($email) && isset($contact) && isset($city) &&isset($hosno) &&isset($url) && isset($password)) {
		$DonorDOB = $year . "-" . $month . "-" . $day;
		$password = md5($password);
		$sql = "INSERT INTO donor_db(NAME,BLOOD_GROUP,GENDER,EMAIL,CITY,HOS_NO,DOB,CONTACT,SAVE_LIFE_DATE,REDIRECT_URL,PASSWORD) VALUES('$name','$blood_group','$gender','$email','$city','$hosno','$DonorDOB','$contact','0','$url','$password')";

		if (mysqli_query($connection, $sql)) {
			$SubmitSuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  				<strong>Data inserted successfully</strong>
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
   		    	<span aria-hidden="true">&times;</span>
  				</button>
				</div>';
				header("Location: signin.php");
    exit();
		} else {
			$SubmitError = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  				<strong>Data not inserted try again.</strong>
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
   		    	<span aria-hidden="true">&times;</span>
  				</button>
				</div>';
		}
	} else {
		$termError = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  	<strong>Please agree our terms and conditions</strong>
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
 	</button>
	</div>';
	}
}


?>
<style>
	.size {
		min-height: 0px;
		padding: 60px 0 40px 0;

	}

	.form-container {
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
	}

	.form-group {
		text-align: left;
	}

	h1 {
		color: white;
	}

	h3 {
		color: #e74c3c;
		text-align: center;
	}

	.red-bar {
		width: 25%;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="white-bar">
		</div>
	</div>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
			<h3>Sign Up</h3>
			<hr class="red-bar">

			<?php if (isset($termError))
				echo $termError; ?>

			<!-- Error Messages -->

			<form class="form-group" action="" method="post" novalidate="">
				<div class="form-group">
					<label for="fullname">Full Name</label>
					<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+"
						title="Only lower and upper case and space" class="form-control">
					<?php if (isset($nameError))
						echo $nameError; ?>
				</div><!--full name-->
				<div class="form-group">
					<label for="name">Blood Group</label><br>
					<select class="form-control demo-default" id="blood_group" name="blood_group" required>
						<option value="">---Select Your Blood Group---</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select>
					<?php if (isset($blood_groupError))
						echo $blood_groupError; ?>
				</div><!--End form-group-->

				<div class="form-group">
					<label for="gender">Gender</label><br>
					Male<input type="radio" name="gender" id="gender" value="Male"
						style="margin-left:10px; margin-right:10px;" checked>
					Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;">
					<?php if (isset($genderError))
						echo $genderError; ?>
				</div><!--gender-->

				<div class="form-group">
					<label for="name">Date of Birth</label><br>
					<div class="form-inline"><select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
						<option value="">---Date---</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
					<select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;"
						required>
						<option value="">---Month---</option>
						<option value="01">January</option>
						<option value="02">February</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>
					<select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;"
						required>
						<option value="">---Year---</option>
						<option value="1957">1957</option>
						<option value="1958">1958</option>
						<option value="1959">1959</option>
						<option value="1960">1960</option>
						<option value="1961">1961</option>
						<option value="1962">1962</option>
						<option value="1963">1963</option>
						<option value="1964">1964</option>
						<option value="1965">1965</option>
						<option value="1966">1966</option>
						<option value="1967">1967</option>
						<option value="1968">1968</option>
						<option value="1969">1969</option>
						<option value="1970">1970</option>
						<option value="1971">1971</option>
						<option value="1972">1972</option>
						<option value="1973">1973</option>
						<option value="1974">1974</option>
						<option value="1975">1975</option>
						<option value="1976">1976</option>
						<option value="1977">1977</option>
						<option value="1978">1978</option>
						<option value="1979">1979</option>
						<option value="1980">1980</option>
						<option value="1981">1981</option>
						<option value="1982">1982</option>
						<option value="1983">1983</option>
						<option value="1984">1984</option>
						<option value="1985">1985</option>
						<option value="1986">1986</option>
						<option value="1987">1987</option>
						<option value="1988">1988</option>
						<option value="1989">1989</option>
						<option value="1990">1990</option>
						<option value="1991">1991</option>
						<option value="1992">1992</option>
						<option value="1993">1993</option>
						<option value="1994">1994</option>
						<option value="1995">1995</option>
						<option value="1996">1996</option>
						<option value="1997">1997</option>
						<option value="1998">1998</option>
						<option value="1999">1999</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
					</select></div>
				</div><!--End form-group-->
				<?php if (isset($dayError))
					echo $dayError; ?>
				<?php if (isset($monthError))
					echo $monthError; ?>
				<?php if (isset($yearError))
					echo $yearError; ?>
				<div class="form-group">
					<label for="fullname">Email</label>
					<input type="text" name="email" id="email" placeholder="Email"
						pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email"
						class="form-control">
					<?php if (isset($emailError))
						echo $emailError; ?>
				</div>

				<div class="form-group">
					<label for="contact_no">Contact No</label>
					<input type="text" name="contact_no" value="" placeholder="+91xxxxxxxxxx" class="form-control" required
						pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
					<?php if (isset($contactError))
						echo $contactError; ?>
				</div><!--End form-group-->

				<div class="form-group">
					<label for="city">Choose Hospital:</label>
					<select name="city" id="city" class="form-control demo-default" required>
						<option value="">-- Select --</option>
						<optgroup title="Howrah" label="&raquo; Howrah"></optgroup>
						<option value="Narayana Hospital">Narayana Hospital</option>
						<option value="ILS Hospital">ILS Hospital</option>
						<optgroup title="Kolkata" label="&raquo; Kolkata"></optgroup>
						<option value="Apollo Hospital">Apollo Hospital</option>
						<option value="Calcutta Medical Research Institute">Calcutta Medical Research Institute</option>
						<optgroup title="Barasat" label="&raquo; Barasat"></optgroup>
						<option value="City Hospital">City Hospital</option>
						<option value="GNRC Hospital">GNRC Hospital</option>
						<optgroup title="Barrackpore" label="&raquo; Barrackpore"></optgroup>
						<option value="BMRC Hospital">BMRC Hospital</option>
						<option value="BN Bose Hospital">BN Bose Hospital</option>
						<optgroup title="Chakdah" label="&raquo; Chakdah"></optgroup>
						<option value="Chakdah General Hospital">Chakdah General Hospital</option>
						<option value="Charu Hospital">Charu Hospital</option>
					</select>
					<?php if (isset($cityError))
						echo $cityError; ?>
				</div><!--city end-->

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" value="" placeholder="Password" class="form-control" required
						pattern="{.6,.90}">
				</div><!--End form-group-->
				<div class="form-group">
					<label for="password">Confirm Password</label>
					<input type="password" name="c_password" value="" placeholder="Confirm Password"
						class="form-control" required pattern="{.6,.90}">
					<?php if (isset($passwordError))
						echo $passwordError; ?>
				</div><!--End form-group-->

				
				<div class="form-group">
				 <div class="g-recaptcha" data-sitekey="6LdGbX4pAAAAAL1gXkFan1KoieltQKHryfGX0G-v" required></div>
				 </div>

				<div class="form-inline">
					<input type="checkbox" name="term" value="true" required style="margin-left:10px;">
					<span style="margin-left:10px;"><b>I agree to share all the details and Terms and Conditions</b></span>
				</div><!--End form-group-->

				<div class="form-group">
					<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned"
						style="margin-top: 20px;">SignUp</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
//include footer file
include('include/footer.php');
?>