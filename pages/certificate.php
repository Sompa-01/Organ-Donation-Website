<?php 
include("../includes/connection.php");
include("../includes/header.php"); 
session_start();

if (!isset($_SESSION['user'])) {
    echo "<p>Please <a href='login.php'>login</a> first.</p>";
    include("../includes/footer.php");
    exit;
}

$user = $_SESSION['user'];
?>
<h2>Donation Certificate</h2>
<div style="border:2px solid #333; padding:20px; text-align:center;">
    <h3>Organ Donation Certificate</h3>
    <p>This is to certify that</p>
    <h2><?php echo $user['name']; ?></h2>
    <p>has pledged to donate organs and save lives.</p>
    <p><i>Issued on: <?php echo date("d M Y"); ?></i></p>
</div>
<?php include("../includes/footer.php"); ?>
