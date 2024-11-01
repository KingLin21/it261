<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency/Mileage Calculator</title>
    <link href="weeks/week5/css/styles.css" type="text/css" rel="stylesheet">
    <style> 
    h1 {
        text-align: center;
    }
    </style>
</head>
<body>
<h1>My Travel Calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>NAME</label>
            <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">

            <label>Total Miles</label>
            <input type="number" name="miles" value="<?php if (isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']); ?>">

            <label>Speed (mph)</label>
            <input type="number" name="speed" value="<?php if (isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']); ?>">

            <label>Hours per Day</label>
            <input type="number" name="hours_per_day" value="<?php if (isset($_POST['hours_per_day'])) echo htmlspecialchars($_POST['hours_per_day']); ?>">

            <label>Choose Gas Price</label>
            <ul>
                <li><input type="radio" name="price" value="3.00" <?php if (isset($_POST['price']) && $_POST['price'] == '3.00') echo 'checked="checked"'; ?>> $3.00 per gallon</li>
                <li><input type="radio" name="price" value="3.50" <?php if (isset($_POST['price']) && $_POST['price'] == '3.50') echo 'checked="checked"'; ?>> $3.50 per gallon</li>
                <li><input type="radio" name="price" value="4.00" <?php if (isset($_POST['price']) && $_POST['price'] == '4.00') echo 'checked="checked"'; ?>> $4.00 per gallon</li>
            </ul>

            <label>Fuel Efficiency (mpg)</label>
            <select name="efficiency">
                <option value="" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '') echo 'selected="selected"'; ?>>Select fuel efficiency</option>
                <option value="15" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '15') echo 'selected="selected"'; ?>>15 mpg</option>
                <option value="20" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '20') echo 'selected="selected"'; ?>>20 mpg</option>
                <option value="25" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '25') echo 'selected="selected"'; ?>>25 mpg</option>
                <option value="30" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '30') echo 'selected="selected"'; ?>>30 mpg</option>
                <option value="35" <?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '35') echo 'selected="selected"'; ?>>35 mpg</option>
            </select>

            <input type="submit" value="Calculate">
            <p><a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">Reset it!</a></p>
        </fieldset>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = [];

        // Error checks
        if (empty($_POST['name'])) {
            echo '<p class="error">Please fill out your name!</p>';
        }
        if (empty($_POST['miles'])) {
            echo '<p class="error">Please enter total miles!</p>';
        }
        if (empty($_POST['speed'])) {
            echo '<p class="error">Please enter speed!</p>';
        }
        if (empty($_POST['hours_per_day'])) {
            echo '<p class="error">Please enter hours per day!</p>';
        }
        if (empty($_POST['price'])) {
            echo '<p class="error">Please select a gas price!</p>';
        }
        if (empty($_POST['efficiency'])) {
            echo '<p class="error">Please select fuel efficiency!</p>';
        }

        // Assign variables if all fields are set
        if (isset($_POST['name'], $_POST['miles'], $_POST['speed'], $_POST['hours_per_day'], $_POST['price'], $_POST['efficiency'])) {
            $name = $_POST['name'];
            $miles = floatval($_POST['miles']);
            $speed = floatval($_POST['speed']);
            $hours_per_day = floatval($_POST['hours_per_day']);
            $price = floatval($_POST['price']);
            $efficiency = floatval($_POST['efficiency']);

            // Calculate total hours, days, and cost
            if (!empty($name && $miles && $speed && $hours_per_day && $price && $efficiency)) {
                $total_hours = $miles / $speed;
                $days = ceil($total_hours / $hours_per_day);
                $total_cost = ($miles / $efficiency) * $price;

                echo '
                <div class="box">
                    <h2>Hello, ' . htmlspecialchars($name) . '</h2>
                    <p>Your trip of ' . number_format($miles) . ' miles will take approximately ' . $days . ' days, with an estimated cost of $' . number_format($total_cost, 2) . '.</p>
                </div>';
            }
        }
    }
    ?>
</body>
</html>