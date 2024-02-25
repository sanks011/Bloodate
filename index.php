<?php

//include header file
include('include/header.php');

?>


<div class="container-fluid header-img">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<div class="header">
				<h1 class="text-center">Donate Blood, Save Lifes</h1>
				<p class="text-center">Your Blood Can Light Up Someone's World.</p>
			</div>


			<h1 class="text-center">Search the donors</h1>
			<hr class="white-bar text-center">

			<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
				<div class="form-group text-center justify-content-center">

					<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default"
						required>
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
				</div>
				<div class="form-group center-aligned">
					<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;"
						class="form-control demo-default text-center margin10px">
						<option value="">-- Select --</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>

					</select>
				</div>
				<div class="form-group center-aligned">
					<button type="submit" class="btn btn-lg btn-danger">Search</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- header ends -->

<!-- donate section -->
<div class="container-fluid red-background">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Why Donate?</h1>
			<hr class="white-bar">
			<p class="text-center pera-text">
				"Donate blood: It's a simple act with profound impact, saving lives and spreading hope in times of
				need."


				In a recent emergency situation, a community faced a devastating accident resulting in multiple
				casualties. Thanks to the regular blood donations made by individuals like you, hospitals were equipped
				to respond swiftly and effectively. The timely availability of blood ensured that every injured person
				received the life-saving transfusions they urgently required, turning potential tragedies into stories
				of survival and recovery. Your simple act of donating blood made all the difference in these critical
				moments, underscoring the crucial role of blood donation in saving lives and strengthening communities.
			</p>
			<a href="donate.php" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
		</div>
	</div>
</div>
<!-- end donate section -->


<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Vision</h3>
				<img src="img/vo.png" alt="Our Vision" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					Creating a world where every heartbeat is sustained, fueled by a shared vision of accessible, safe,
					and abundant blood donation.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Goal</h3>
				<img src="img/valu.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					Empowering communities to achieve our collective goal: ensuring every drop counts in saving lives
					through blood donation.
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Mission</h3>
				<img src="img/mis.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
					Saving lives drop by drop: Join us in the noble mission of donating blood and giving the gift of
					life.
				</p>
			</div>
		</div>
	</div>
</div>

<!-- end aboutus section -->


<?php
//include footer file
include('include/footer.php');
?>
