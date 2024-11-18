<?php
// Database configuration
$servername = "localhost";
$username = "root";  // Your MySQL username
$password = "";      // Your MySQL password
$dbname = "award_nominations"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $nominee_for = $_POST['nominee_for'];
    $your_name = $_POST['your_name'];
    $phone_number = $_POST['phone_number'];
    $nominee_name = $_POST['nominee_name'];
    $nominee_native = $_POST['nominee_native'];
    $nominee_address = $_POST['nominee_address'];
    $nominee_whatsapp = $_POST['nominee_whatsapp'];
    $nominee_alternate = $_POST['nominee_alternate'];
    $nominee_youtube = $_POST['nominee_youtube'];
    $nominee_instagram_id = $_POST['nominee_instagram_id'];
    $nominee_other_platform_id = $_POST['nominee_other_platform_id'];
    $instagram_url = $_POST['instagram_url'];
    $youtube_url = $_POST['youtube_url'];
    $other_platform_url = $_POST['other_platform_url'];
    $award_category = $_POST['award_category'];
    $reason_for_nomination = $_POST['reason_for_nomination'];
    $achievements = $_POST['achievements'];
    
    // Handle image upload
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($_FILES["nominee_image"]["name"]);
    // move_uploaded_file($_FILES["nominee_image"]["tmp_name"], $target_file);
    
    // Get the recent video link
    $recent_video_link = $_POST['recent_video_link'];
    
    // Insert into the database
    $sql = "INSERT INTO nominations (nominee_for, your_name, phone_number, nominee_name, nominee_native, nominee_address, 
                nominee_whatsapp, nominee_alternate, nominee_youtube, nominee_instagram_id, nominee_other_platform_id,
                instagram_url, youtube_url, other_platform_url, award_category, reason_for_nomination, achievements,
                nominee_image, recent_video_link)
            VALUES ('$nominee_for', '$your_name', '$phone_number', '$nominee_name', '$nominee_native', '$nominee_address', 
                    '$nominee_whatsapp', '$nominee_alternate', '$nominee_youtube', '$nominee_instagram_id', '$nominee_other_platform_id', 
                    '$instagram_url', '$youtube_url', '$other_platform_url', '$award_category', '$reason_for_nomination', 
                    '$achievements', '$target_file', '$recent_video_link')";

    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>
        alert('New record created successfully');
        setTimeout(function() {
            window.location.href = 'Register.php';
        }, 2000); // Redirects after 2 seconds
      </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
