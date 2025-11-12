<?php
require "connection.php";

// Start session to maintain login state
session_start();

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    
    // Get and sanitize input
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    
    // Validate inputs
    if (empty($username) || empty($password)) {
        $error = "Please fill in all fields";
        header("location: login.html?error=" . urlencode($error));
        exit();
    }
    
    // Prepare SQL statement to prevent SQL injection
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "s", $username);
        
        // Execute statement
        mysqli_stmt_execute($stmt);
        
        // Get result
        $result = mysqli_stmt_get_result($stmt);
        
        if ($row = mysqli_fetch_assoc($result)) {
            // Verify password (assuming passwords are hashed)
            if (password_verify($password, $row['passwords'])) {
                // Password is correct, start session
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['logged_in'] = true;
                
                // Redirect to admin panel
                header("Location: bootmain.html");
                exit();
            } else {
                // Invalid password
                $error = "Invalid username or password";
                header("Location: login.html?error=" . urlencode($error));
                exit();
            }
        } else {
            // User not found
            $error = "Invalid username or password";
            header("Location: login.html?error=" . urlencode($error));
            exit();
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        // Statement preparation failed
        $error = "Database error. Please try again.";
        header("Location: login.html?error=" . urlencode($error));
        exit();
    }
} else {
    // Invalid request method or missing fields
    header("Location: login.html");
    exit();
}

// Close connection
mysqli_close($conn);
?>