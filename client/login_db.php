<?php
session_start();
$connection = mysqli_connect("localhost","root","","project");

extract($_POST);

$query = "SELECT * FROM client_db WHERE email='$email' AND pass='$pass'";

$res = $connection->query($query);
if($res->num_rows>0){

while($row = $res->fetch_assoc()){ 

$_SESSION['cid'] = $row['id'];
$_SESSION['name'] = $row['name'];

header("location: ../index.php");
} } else { ?>
<script>
    alert("enter valid credential , first ....!!!!");
    window.location = "login.php";
</script>
<?php } ?>