<?php
// Connect to database
$db = mysqli_connect("localhost", "root", "", "DB");

if (isset($_POST['email'], $_POST['password'])) {
   $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
$password = trim($password);

// Check password length and emptiness
if (strlen($password) >= 8 && !empty($password)) {

  // Insert user into database
  $sql = "INSERT INTO register (name,email, password) VALUES ('$name','$email', '$password')";
  mysqli_query($db, $sql);

  echo "Sign up successful! Please login.";
}
else{
  echo"<span>error</span>";
}
}
?>