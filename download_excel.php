<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "award_nominations";
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT * FROM nominations";
$result = $conn->query($sql);

// Check if there are any rows in the result
if ($result->num_rows > 0) {
    // Set the headers for the Excel file
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="nomination_data.xls"');
    header('Cache-Control: max-age=0');

    // Output the column headers
    echo "ID\tNominee For\tYour Full Name\t\tNominee's Native\tPhone Number\tNominee's Address\tNominee's WhatsApp\t\tNominee's Alternate Phone\t\tNominee's YouTube Channel\tNominee's Instagram ID\t\tNominee's Other Platform\t\tNominee's Image\t\tInstagram URL\t\tYouTube URL\t\tOther Platform URL\t\tAward Categories\tReason For Nomination\tAchievements\tPost Video Link\n";

    // Output the data from the database
    while ($row = $result->fetch_assoc()) {
        echo $row['id'] . "\t" . $row['nominee_for'] . "\t"  . $row['your_name'] . "\t". $row['nominee_native'] . "\t". $row['phone_number'] . "\t". $row['nominee_address'] . "\t" . $row['nominee_whatsapp'] . "\t". $row['nominee_alternate'] . "\t". $row['nominee_youtube'] . "\t". $row['nominee_instagram_id'] . "\t". $row['nominee_other_platform_id'] . "\t". $row['nominee_image'] . "\t". $row['instagram_url'] . "\t". $row['youtube_url'] . "\t". $row['other_platform_url'] . "\t". $row['award_category'] . "\t" . $row['reason_for_nomination'] . "\t" . $row['achievements'] . "\t" . $row['recent_video_link'] . "\n";
    }
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
exit();
?>
