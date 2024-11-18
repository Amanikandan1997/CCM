<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "award_nominations";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT * FROM nominations";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    background-image: url('https://capecomorinmedia.github.io/ccm/assets/2024/images/DigitalBGI2024.jpg'); /* Replace 'your-image.jpg' with the image's filename */
    background-size: cover; /* Ensures the image covers the entire screen */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    background-attachment: fixed; /* Keeps the background fixed during scrolling */
    background-position: center; /* Centers the image */
    margin: 0;
    padding: 0;
}

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            color: #333333;
        }

        a {
            text-decoration: none;
            color: #f0b643;
            font-weight: bold;
        }

        a:hover {
            color: #e0a733;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        table th {
            background-color: #f0b643;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        .button-container {
            margin-top: 20px;
        }

        .button-container a {
            padding: 10px 20px;
            background-color: #f0b643;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .button-container a:hover {
            background-color: #e0a733;
        }

        @media (max-width: 768px) {
            table th, table td {
                padding: 8px;
            }

            table th {
                font-size: 14px;
            }

            table td {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Dashboard</h2>
        <a href="logout.php">Logout</a>

        <h3>Registered Nominations</h3>
        <div class="table-responsive">
        <table>
    <tr>
        <th>ID</th>
        <th>Nominee for</th>
        <th>Your Full Name</th>
        <th>Phone</th>
        <th>Nominee's Full Name</th>
        <th>Nominee's Native</th>
        <th>Nominee's Address</th>
        <th>Nominee's WhatsApp</th>
        <th>Nominee's Alternate Phone</th>
        <th>Nominee's YouTube Channel</th>
        <th>Nominee's Instagram ID</th>
        <th>Nominee's Other Platform</th>
        <th>Nominee's Image</th>
        <th>Instagram URL</th>
        <th>YouTube URL</th>
        <th>Other Platform URL</th>
        <th>Award Category</th>
        <th>Reason for Nomination</th>
        <th>Achievements</th>
        <th>Post Video Link</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nominee_for']; ?></td>
            <td><?php echo $row['your_name']; ?></td>
            <td><?php echo $row['phone_number']; ?></td>
            <td><?php echo $row['nominee_name']; ?></td>
            <td><?php echo $row['nominee_native']; ?></td>
            <td><?php echo $row['nominee_address']; ?></td>
            <td><?php echo $row['nominee_whatsapp']; ?></td>
            <td><?php echo $row['nominee_alternate']; ?></td>
            <td><?php echo $row['nominee_youtube']; ?></td>
            <td><?php echo $row['nominee_instagram_id']; ?></td>
            <td><?php echo $row['nominee_other_platform_id']; ?></td>
            <td><img src="<?php echo $row['nominee_image']; ?>" alt="Nominee Image" style="width: 100px; height: auto;"></td>
            <td><?php echo $row['instagram_url']; ?></td>
            <td><?php echo $row['youtube_url']; ?></td>
            <td><?php echo $row['other_platform_url']; ?></td>
            <td><?php echo $row['award_category']; ?></td>
            <td><?php echo $row['reason_for_nomination']; ?></td>
            <td><?php echo $row['achievements']; ?></td>
            <td><?php echo $row['recent_video_link']; ?></td>
        </tr>
    <?php } ?>
</table>

        </div>

        <div class="button-container">
            <a href="download_excel.php">Download Data as Excel</a>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
