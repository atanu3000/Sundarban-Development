<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php") ?>
<link rel="stylesheet" href="assets/loginStyle.css">
<body>
    <div id="form">
        <h1>Welcome Admin</h1> <br />
        <form name="form" action="login_db.php" method="POST">
            <div>
                <label >Username or email: </label>
                <input class="form-control" type="text" id="user" name="uname" placeholder="name@gmail.com" required>
            </div>
            <div>
                <label >Password: </label>
                <input class="form-control" type="password" id="pass" name="pass" placeholder="Type your password" required> <br/>
            </div>
            <button class="form-control" type="submit" id="btn" value="Login" name="submit">Login</button>
            <a id="btn" class="form-control" href="../client/login.php">Login as customer</a>
        </form>
    </div>
</body>

</html>