<?php
include('config.php');

$sql = 'SELECT id, name, race FROM lotr_characters';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

include('includes/header.php');
?>

<main>
<h1>Lord of the Rings Characters</h1>
<p>Explore the iconic characters from the world of Middle-earth. Click on a name to learn more about their story and role in the epic tale!</p>
<ul>
    <?php
    if (mysqli_num_rows($result) > 0) {
        // Loop through and display each character
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<li><a href="view.php?id=' . $row['id'] . '">' . stripslashes($row['name']) . '</a> (' . stripslashes($row['race']) . ')</li>';
        }
    } else {
        echo '<li>No characters found in the database.</li>';
    }
    ?>
</ul>
</main>

<aside>
<h3>About Middle-earth</h3>
<p>Middle-earth is a rich and detailed world filled with fascinating characters, each with their own story. From the humble hobbits of the Shire to the noble Elves of Rivendell, explore their journeys and learn about their unique contributions to the Fellowship of the Ring.</p>
</aside>

<?php
@mysqli_free_result($result);
@mysqli_close($iConn);

include('includes/footer.php');
?>