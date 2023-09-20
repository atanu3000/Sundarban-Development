<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "project");

// Check if the connection was successful
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Assuming you have a form with input fields named "name," "email," and "pass"
if (isset($_POST['name'], $_POST['email'], $_POST['pass'])) {
    // Sanitize and prepare the data
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $pass = mysqli_real_escape_string($connect, $_POST['pass']);

    // Hash the password (you should use a proper password hashing library)
    //$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    // Create a prepared statement
    $query = "INSERT INTO client_db (name, email, pass) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($connect, $query);

    if ($stmt) {
        // Bind the parameters
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $pass);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Check if the insertion was successful
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            header("location: login.php");
        } else {
            echo "Error: " . mysqli_error($connect);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($connect);
    }
} else { ?>
    <script>
        alert("enter valid credential , first ....!!!!");
        window.location = "register.php";
    </script>
<?php }

// Close the database connection
mysqli_close($connect);
?>