<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Certificate</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        /* Certificate styles */
        .certificate {
            width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 10px solid #c0392b;
            background-color: #fff;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .certificate h1 {
            font-size: 36px;
            color: #c0392b;
            margin-bottom: 20px;
        }

        .certificate h2 {
            font-size: 28px;
            color: #333;
            margin-top: 20px;
        }

        .certificate h3 {
            font-size: 24px;
            color: #333;
            margin-top: 10px;
        }

        .certificate p {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
        }

        .certificate img {
            margin-top: 30px;
            max-width: 100%;
            height: auto;
        }

        .certificate .signature {
            position: absolute;
            bottom: 20px;
            right: 20px;
            font-size: 20px;
            color: #333;
        }

        @media print {
            /* Hide print button when printing */
            .certificate-print-button {
                display: none;
            }
        }
    </style>
</head>
<body>
<div class="certificate">
    <h1>Blood Donation Certificate</h1>
        <p>This certificate is awarded to</p>
        <h2><?php echo isset($_POST['name']) ? $_POST['name'] : 'Dr. John Doe'; ?></h2>
        <p>for donating blood at</p>
        <h3><?php echo isset($_POST['hospital']) ? $_POST['hospital'] : 'Hospital Name'; ?></h3>
        <p>on <?php echo isset($_POST['date']) ? $_POST['date'] : 'Date'; ?>.</p>
        <p>Thank you for your contribution to save lives through blood donation.</p>
       
    </div>
</body>
</html>
