<?php
// Include header file
include('include/header.php');
?>

<div class="header">
    <br><br><br><br>
    <h1 class="text-center">Welcome Life Saver!</h1>
    <p class="text-center">Thank You for saving a life by donating your precious blood</p>
</div>

<div class="text-center" style="margin-top: 20px;">
    <a href="profile.php" class="btn btn-info btn-lg">Track Your Donation History</a>
</div>
<br><br><br>

<button class="btn btn-default btn-lg text-center center-aligned" id="getRewardButton" >Get Your Reward!</button>


<br><br><br><br><br><br><br><br><br><br><br><br>

<?php include 'include/footer.php'; ?>

<script>
    document.getElementById('getRewardButton').addEventListener('click', function() {
        // Redirect to the desired URL
        window.location.href = 'https://docs.google.com/forms/d/e/1FAIpQLSfPz7NQKQw57xRyGGH-LY40oO1BrP0m5AV6QboO0GnM3St7xQ/viewform?usp=sf_link';
    });
</script>