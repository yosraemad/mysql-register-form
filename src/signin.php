<?php
$con = mysqli_connect('localhost', 'root', '', 'registration');

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT `name` from `user` WHERE email='$email' AND password='$password'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) == 1) {
    $name = mysqli_fetch_row($result)[0];
    echo "Welcome $name";
} else {
    echo "<script>
    alert('Invalid Credentials');
    window.location.href='../login.html';
    </script>";
}

?>