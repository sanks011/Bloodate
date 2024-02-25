<?php

//include header file
include('include/header.php');

?>
<style>
	.size {
		min-height: 0px;
		padding: 60px 0 40px 0;

	}

	.loader {
		display: none;
		width: 69px;
		height: 89px;
		position: absolute;
		top: 25%;
		left: 50%;
		padding: 2px;
		z-index: 1;
	}

	.loader .fa {
		color: #e74c3c;
		font-size: 52px !important;
	}

	.form-group {
		text-align: left;
	}

	h2{
		color: black;
		font-size: 20px;
	}

	h1 {
		color: white;
	}

	h4{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}

	h3 {
		color: #e74c3c;
		text-align: center;
	}

	.red-bar {
		width: 25%;
	}

	span {
		display: block;
	}

	.city {
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}

	.donors_data {
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
				<div class="form-group text-center center-aligned">
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
					<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
    document.getElementById("search").addEventListener("click", function() {
        window.location.href = "index.php";
    });
</script>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->
		<?php
		if ((isset($_GET['city']) && !empty($_GET['city'])) && isset($_GET['blood_group']) && !empty($_GET['blood_group'])) {
			$city=$_GET['city'];
			$blood_group=$_GET['blood_group'];
			$sql = "SELECT * FROM donor_db WHERE city ='$city' OR blood_group='$blood_group'";
			$result = mysqli_query($connection, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					if ($row['SAVE_LIFE_DATE'] == '0') {
						echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
			<span class="city">' . $row['CITY'] . '</span>
			<h2><span>' . $row['BLOOD_GROUP'] . ' available </span></h2>
			<h4>Contact Hospital</h4>
			 <h5><span>'.$row['HOS_NO'].'</span></h5>
			 <button class="redirect-btn btn btn-primary" data-url="' . $row['REDIRECT_URL'] . '">View on Google Maps</button>
			</div>';
					} else {
						echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
			<span class="city">' . $row['CITY'] . '</span>
			<h2><span>' . $row['BLOOD_GROUP'] . ' available </span></h2>
			<h4>Contact Hospital</h4>
			 <h5><span>'.$row['HOS_NO'].'</span></h5>
			<span>'.$row['HOS_NO'].'</span>
			<button class="redirect-btn btn btn-primary" data-url="' . $row['REDIRECT_URL'] . '">View on Google Maps</button>
			</div>';
					}
				}
			} else {
				echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Data Not found</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
  	</div>';
			}
		}
		?>
	</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const redirectButtons = document.querySelectorAll('.redirect-btn');

        redirectButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const redirectUrl = button.getAttribute('data-url');
                window.location.href = redirectUrl;
            });
        });
    });
</script>


<?php



//include footer file
include('include/footer.php');

?>