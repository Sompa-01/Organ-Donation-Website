<?php 
include("../includes/connection.php");
include("../includes/header.php"); 

if (isset($_POST['register'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $pass  = md5($_POST['password']); 
    $role  = $_POST['role'];

    $sql = "INSERT INTO users (name, email, password, role) VALUES ('$name','$email','$pass','$role')";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Registration successful! <a href='login.php'>Login here</a></p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>
<h2>Register</h2>
<form method="post">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="password" name="password" placeholder="Password" required>
    <select name="role" required>
        <option value="donor">Donor</option>
        <option value="recipient">Recipient</option>
    </select>
    <button type="submit" name="register">Register</button>
</form>
<?php include("../includes/footer.php"); ?>
