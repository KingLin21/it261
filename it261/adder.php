<?php  // adder.php

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate if both inputs are provided
    if (empty($_POST['num1']) || empty($_POST['num2'])) {
        // Added: Error message if any input is missing
        $errorMsg = "Please enter both numbers!";
    } else {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Corrected: Changed from '$myTotal -= $num1 + $Num2;' to '$myTotal = $num1 + $num2;'
        // - Replaced '-=' with '=' for proper addition
        // - Corrected variable '$Num2' to '$num2' (PHP is case-sensitive)
        $myTotal = $num1 + $num2;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Adder Assignment</title>
    <!-- Added in-line CSS for centering -->
    <style>
        /* Centered the body content */
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 50px; /* Added top margin for spacing */
        }
        form {
            display: inline-block; /* Centered form */
            margin: 20px auto;
        }
        h2 {
            color: red;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Adder.php</h1>
    <!-- Corrected: Added 'action="adder.php"' and 'method="post"' to ensure form submission -->
    <form action="adder.php" method="post">
        <label>Enter the first number:</label>
        <!-- Corrected: Changed 'name="Num1"' to 'name="num1"' to match variable name -->
        <input type="text" name="num1"><br><br>

        <label>Enter the second number:</label>
        <input type="text" name="num2"><br><br>

        <!-- Corrected: Added missing closing quotation mark for 'value' -->
        <input type="submit" value="Add Em!!">
    </form>

    <?php
    // Display error message if inputs are missing
    if (isset($errorMsg)) {
        // Corrected: Added error message display
        echo '<p class="error">' . $errorMsg . '</p>';
    }

    // Display the result after the form
    if (isset($myTotal)) {
        // Corrected: Adjusted echo statement to ensure it appears after the form
        echo '<h2>You added ' . $num1 . ' and ' . $num2 . '.</h2>';
        echo '<p>The answer is: <span style="color:red;">' . $myTotal . '</span></p>';
    }
    ?>

    <!-- Reset Link -->
    <!-- Corrected: Added proper link to reset the page -->
    <p><a href="adder.php">Reset page</a></p>
</body>
</html>