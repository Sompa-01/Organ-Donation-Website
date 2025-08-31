<?php 
include("../includes/connection.php");
include("../includes/header.php"); 
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass  = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $result->fetch_assoc();
        header("Location: profile.php");
        exit;
    } else {
        echo "<p>Invalid login credentials!</p>";
    }
}
?>
<h2>Login</h2>
<form method="post">
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" name="login">Login</button>
</form>
<?php include("../includes/footer.php"); ?>
