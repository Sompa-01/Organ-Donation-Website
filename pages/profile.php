<?php 
include("../includes/connection.php");
include("../includes/header.php"); 
session_start();

if (!isset($_SESSION['user'])) {
    echo "<p>You must <a href='login.php'>login</a> first.</p>";
    include("../includes/footer.php");
    exit;
}

$user = $_SESSION['user'];
?>
<h2>Welcome, <?php echo $user['name']; ?> 👋</h2>
<p>Email: <?php echo $user['email']; ?></p>
<p>Role: <?php echo ucfirst($user['role']); ?></p>

<a href="donate.php">Donate Organ</a> | 
<a href="certificate.php">Download Certificate</a> | 
<a href="logout.php">Logout</a>

<?php include("../includes/footer.php"); ?>
