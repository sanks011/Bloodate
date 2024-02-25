<?php 

	//include header file
	include ('include/header.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Life Saver</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            text-align: center;
        }

        .welcome-text {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff6f61;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #ff504c;
        }

        .form-container {
            display: none;
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-container button {
            padding: 10px 20px;
            background-color: #ff6f61;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="welcome-text">Welcome Life Saver!</div>
        <a href="#" class="button" id="showForm">Get Your Certificate</a>
        <div class="form-container" id="certificateForm">
            <form action="generate_certificate.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required><br>
                <input type="date" name="donation_date" required><br>
                <input type="text" name="hospital_name" placeholder="Hospital Name" required><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('showForm').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('certificateForm').style.display = 'block';
        });
    </script>
</body>

</html>

<?php include 'include/footer.php' ?>