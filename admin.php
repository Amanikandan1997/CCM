<?php
session_start();

// Assuming you have an authentication mechanism
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php"); // Redirect to login if not authenticated
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "award_nomination";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch nominations grouped by category
$sql = "SELECT * FROM nominations ORDER BY award_category";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Award Nominations</title>
</head>
<body>
    <h1>Award Nominations Admin Panel</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nominee For</th>
            <th>Your Name</th>
            <th>Phone Number</th>
            <th>Nominee's Name</th>
            <th>Category</th>
            <th>Achievements</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nominee_for"] . "</td>";
                echo "<td>" . $row["your_name"] . "</td>";
                echo "<td>" . $row["phone_number"] . "</td>";
                echo "<td>" . $row["nominee_name"] . "</td>";
                echo "<td>" . $row["award_category"] . "</td>";
                echo "<td>" . $row["achievements"] . "</td>";
                echo "<td><a href='download_excel.php'>Download as Excel</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No nominations found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
