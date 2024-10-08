<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link href="css/styles.css" type = "text/css" rel="stylesheet">
</head>
<body>
    <h1><a href="index.php">Sebastian's Portal Page</a></h1>
    <h2>The Navigation below represents our BIG Assignments</h2>
    <div id="wrapper">
        <nav>
            <ul>
            <li><a href="">Switch</a><li>
            <li><a href="">Troubleshoot</a><li>
            <li><a href="">Calculator</a><li>
            <li><a href="">Email</a><li>
            <li><a href="">Database</a><li>
            <li><a href="">Gallery</a><li>
            </ul>
</nav>

<main>
<h2>About Sebastian</h2>
<p>Hello! My name is Sebastian Linhart, and I am a second year student here at Seattle Central Community College. I am currently in the Web Development program working on finishing my AA, in which afterwards I plan on pursuing a higher education at a four year university or I will hopefully join the workforce after getting my AA. I have many hobbies, I am what many people would consider a nerd. I absolutely adore movies, shows and video games. For that matter really all games. I play Dungeons and Dragons with my friends almost every week and I have practiced archery at least once a week since the age of 9 years old.</p>
<img src="Images/sebastian.JPG" alt="Sebastian">
<h2>MAMP Screenshots</h2>
<img src = "Images/MAMP.jpg" alt="Local Host">
<h3>Error Message</h3>
<img src = "Images/error.jpg" alt="Error Message">
</main>
<aside>
<h2>Weekly Class Exercises</h2>
<h3>Week 2</h3>
<ol>
    <li><a href="weeks/week2/var.php">var.php</a></li>
    <li><a href="weeks/week2/vars2.php">var2.php</a></li>
    <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
    <li><a href="weeks/week2/currency.php">currency.php</a></li>
    <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
</ol>
</aside>

</div>
<!--close wrapper !-->
<footer>
        <ul>
            <li>Copyright &copy;
                2024</li>
            <li>All Rights Reserved</li>
            <li><a href="/index.php">Web Design by Sebastian Linhart</a></li>
            <li><a id="html-checker" href="#">HTML Validation</a></li>
            <li><a id="css-checker" href="#">CSS Validation</a></li>
            </ul>
            
            <script>
                    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
            </script>
</footer>
</body>
</html>