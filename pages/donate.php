<?php 
include("../includes/connection.php");
include("../includes/header.php"); 
session_start();

if (!isset($_SESSION['user'])) {
    echo "<p>Please <a href='login.php'>login</a> first.</p>";
    include("../includes/footer.php");
    exit;
}

if (isset($_POST['donate'])) {
    $uid   = $_SESSION['user']['id'];
    $organ = $_POST['organ'];
    $blood = $_POST['blood'];
    $city  = $_POST['city'];

    $sql = "INSERT INTO donors (user_id, organ, blood_group, city) VALUES ('$uid','$organ','$blood','$city')";
    if ($conn->query($sql)) {
        echo "<p>Thank you for pledging to donate!</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>
<h2>Donate Organ</h2>
<form method="post">
    <input type="text" name="organ" placeholder="Organ Name" required>
    <input type="text" name="blood" placeholder="Blood Group" required>
    <input type="text" name="city" placeholder="City" required>
    <button type="submit" name="donate">Submit</button>
</form>
<?php include("../includes/footer.php"); ?>
