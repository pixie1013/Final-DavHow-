<?php 
    session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if(!empty($user_name) && !empty($password) && $role !== ''){ // Check if role is set
            
            // Save to database
            $user_id = random_num(10);
            $query = "INSERT INTO users (user_id, user_name, password, is_admin) VALUES ('$user_id', '$user_name', '$password', '$role')";

            if(mysqli_query($con, $query)){
                // Redirect to login page after successful signup
                header("Location: login.php");
                die;
            } else {
                echo "Error: " . mysqli_error($con);
            }
        } else{
            echo "Please enter some valid information!";
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
    <title>Sign Up</title>
</head>
<body>
    <!--==================== SIGNUP ====================-->
    <div class="login" id="login">
        <form method="post" action="" class="login__form">
          <h2 class="login__title">Sign Up</h2>
         
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
          <div class="login__group">
            <label for="role" class="login__label">Select User Type:</label>
            <select id="role" class="login__input" name="role">
                <option value="0">User</option>
                <option value="1">Admin</option>
            </select>
          </div>
    
         <div>
            <p class="login__signup">
                Already have an account? <a href="login.php">Log In</a>
            </p>
    
            <button type="submit" class="login__button" value="signup">Sign Up</button>
    
            <a href="#" class="login__forgot">
               Forgot password?
            </a>
         </div>
        </form>
      </div>
</body>
</html>