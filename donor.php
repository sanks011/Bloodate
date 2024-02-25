<?php
    include('include/header.php');
?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h2{
		color: black;
		font-size: 20px;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	h4{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.city{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
</style>
<div class="container-fluid red-background size">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center">Donors</h1>
            <hr class="white-bar">
        </div>
    </div>
</div>

<div class="container" style="padding: 60px 0;">
    <div class="row data">

        <?php
        $sql = "SELECT * FROM donor_db";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
                        <span class="city">' . $row['CITY'] . '</span>
                        <h2><span>' . $row['BLOOD_GROUP'] . ' available </span></h2>
                        <h4>Contact Hospital</h4>
                        <h5><span>' . $row['HOS_NO'] . '</span></h5>
                        <button class="redirect-btn btn btn-primary" data-url="' . $row['REDIRECT_URL'] . '">View on Google Maps</button>
                    </div>';
            }
        } else {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Message</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
        ?>

    </div>
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
    include('include/footer.php');
?>
