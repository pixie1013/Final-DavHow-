<?php 
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $login_as = $_POST['login_as']; // 'admin' or 'user'

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Determine the correct query
        $query = "SELECT * FROM users WHERE user_name = ? LIMIT 1";

        if ($stmt = $con->prepare($query)) {
            $stmt->bind_param('s', $user_name);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result && $result->num_rows > 0) {
                $user_data = $result->fetch_assoc();

                // Verify the password (consider using password_hash and password_verify in real applications)
                if ($password === $user_data['password']) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    $_SESSION['user_name'] = $user_data['user_name'];
                    $_SESSION['is_admin'] = $user_data['is_admin'];

                    // Redirect based on role and login type
                    if ($user_data['is_admin'] == 1 && $login_as == 'admin') {
                        header("Location: admin_dashboard.php");
                        exit;
                    } elseif ($user_data['is_admin'] == 0 && $login_as == 'user') {
                        header("Location: homepage.php");
                        exit;
                    } else {
                        echo "<script>alert('Invalid login type for the provided credentials.');</script>";
                    }
                } else {
                    echo "<script>alert('Invalid credentials.');</script>";
                }
            } else {
                echo "<script>alert('Invalid credentials.');</script>";
            }
        } else {
            echo "<script>alert('Query preparation failed.');</script>";
        }
    } else {
        echo "<script>alert('Please enter some valid information!');</script>";
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../photos/logo.png">
    <title>Log In</title>
</head>
<body>
    <!--==================== LOGIN ====================-->
    <div class="login" id="login">
        <form method="post" action="login.php" class="login__form">
            <h2 class="login__title">Log In</h2>

            <div class="login__group">
                <div>
                    <label for="user_name" class="login__label">Username:</label>
                    <input type="text" placeholder="Write your username" id="user_name" class="login__input" name="user_name" required>
                </div>

                <div>
                    <label for="password" class="login__label">Password:</label>
                    <input type="password" placeholder="Enter your password" id="password" class="login__input" name="password" required>
                </div>
            </div>
            
            <div class="login__group">
                <label for="login_as" class="login__label">Select User Type:</label>
                <select id="login_as" class="login__input" name="login_as">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <div>
                <p class="login__signup">
                    Don't have an account? <a href="signup.php">Sign Up</a>
                </p>

                <button type="submit" class="login__button">Log In</button>

                <a href="#" class="login__forgot">Forgot password?</a>
            </div>
        </form>
    </div>
</body>
</html>
