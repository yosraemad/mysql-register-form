<?php
$con = mysqli_connect('localhost', 'root', '', 'registration');

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$searchSql = "SELECT * FROM `user` WHERE email='$email'";
$search = mysqli_query($con, $searchSql) or die("Query Unsuccessful");

if(mysqli_num_rows($search) > 0) {
    echo "<script>
    alert('Email already exists.');
    window.location.href = '../pages/signup.html';
    </script>";
}

$sql = "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";

$rs = mysqli_query($con, $sql);

if($rs) {
    echo "Welcome $name";
} else {
    echo "<script>
    alert('Registration failed');
    window.location.href='../pages/signup.html';
    </script>";
}
?>