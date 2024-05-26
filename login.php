<?php
session_start();
require 'connection.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $login_as = $_POST['login_as'];

    // Sanitize input
    $user_name = htmlspecialchars($user_name);
    $password = htmlspecialchars($password);

    // Hash the password if it is stored as a hash in the database
    // $password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL based on the login type
    if ($login_as == 'admin') {
        $sql = "SELECT * FROM users WHERE user_name = ? AND is_admin = 1";
    } else {
        $sql = "SELECT * FROM users WHERE user_name = ? AND is_admin = 0";
    }

    // Connect to the database and prepare the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $user_name);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['user_name'];
        $_SESSION['is_admin'] = $user['is_admin'];

        if ($login_as == 'admin') {
            header('Location: admin_dashboard.php');
        } else {
            header('Location: user_dashboard.php');
        }
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="stylesheet" href="login_signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Log In</title>
</head>
<body>
    <!--==================== LOGIN ====================-->
    <div class="login" id="login">
        <form method="post" action="" class="login__form">
          <h2 class="login__title">Log In</h2>
         
          <div class="login__group">
            <div>
               <label for="user_name" class="login__label" >Username:</label>
               <input type="text" placeholder="Write your username" id="email" class="login__input" name="user_name">
            </div>
            
            <div>
               <label for="password" class="login__label" >Password:</label>
               <input type="password" placeholder="Enter your password" id="password" class="login__input" name="password">
            </div>
          </div>
    
         <div>
            <p class="login__signup">
                Don't have an account? <a href="signup.php">Sign Up</a>
            </p>
            <div class="loginCreds">
                <button class="login__button" type="submit" name="login_as" value="admin">Login as Admin</button>
                <button class="login__button" type="submit" name="login_as" value="user">Login as User</button>
            </div>
            <a href="#" class="login__forgot">
               Forgot password?
            </a>
         </div>
        </form>
      </div>
</body>
</html>