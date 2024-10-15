<?php
// this file will demonstrate for lopps and in addition to placing your php inside your html!!
// the for loop - loops through a block of code a specified number of times.
// for (init counter; test counter; increment counter) { code to be executed for each iteration; }

// celcius and fahrenheit

// $far = ($celcius *9/5) + 32;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
    <style>
* {
    padding:0;
    maring:0;
    box-sizing:border-box;
}    

table {
    width: 500px;
    margin: 20px auto;
    border-collapse:collapse;
    border:1px solid lightblue;
}
td, th {
    border: 1px solid lightblue;
    border-collapse:collapse;
    padding:5px;
}

h1, h2 {
    text-align: center;
    margin:10px 0;
    color:green;
}
        </style>
</head>
<body>
    <h1>My Celcius / Fahrenheit Table!</h1>
<table>
<tr>
<th>Celcius</th>
<th>Fahrenheit</th>
</tr>
<?php
for($cel = 0; $cel <= 100; $cel += 5){
$far = ($cel *9/5) + 32;
echo '<tr>';
echo '<td> '.$cel.' degrees </td>';
echo '<td> '.$far.' degrees </td>';
echo '</tr>';
}
?>
</table>
<h2>You will now complete a kilometer/milage table on your own!</h2>
<h1>My Kilometer / Mileage Table!</h1>
    <table>
        <tr>
            <th>Kilometers</th>
            <th>Miles</th>
        </tr>
        <?php
        // Loop to generate kilometer to mileage table
        for($km = 0; $km <= 100; $km += 5) {
            $miles = $km * 0.621371; // Conversion factor from km to miles
            echo '<tr>';
            echo '<td>' . $km . ' km</td>';
            echo '<td>' . number_format($miles, 2) . ' miles</td>';
            echo '</tr>';
        }
        ?>
    </table>

</body>
</html>