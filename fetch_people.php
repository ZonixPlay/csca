<?php
$connection = new mysqli("localhost", "root", "", "dalada_db");

if ($connection->connect_error) {
    die("<div class='error'>Connection failed: " . $connection->connect_error . "</div>");
}

$query = "SELECT name, arrival_time FROM visitors ORDER BY arrival_time DESC";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    echo "<div class='people-container'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='person'>";
        echo "<span class='name'>" . htmlspecialchars($row['name']) . "</span>";
        echo "<span class='time'>" . $row['arrival_time'] . "</span>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "<div class='no-data'>5000.</div>";
}

$connection->close();
?>
