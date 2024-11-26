<?php
include('config.php');

if (isset($_GET['id'])) {
    // Check if ID is set and sanitize it
    $id = (int)$_GET['id'];
} else {
    header('Location: characters.php');
    exit;
}

$sql = 'SELECT * FROM lotr_characters WHERE id = ' . $id;

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    // Fetch character details
    while ($row = mysqli_fetch_assoc($result)) {
        $name = stripslashes($row['name']);
        $race = stripslashes($row['race']);
        $role = stripslashes($row['role']);
        $affiliation = stripslashes($row['affiliation']);
        $description = stripslashes($row['description']);
        $feedback = '';
    }
} else {
    $feedback = 'Character not found!';
}

include('includes/header.php');
?>

<main>
<h1>Welcome to the Character View Page</h1>
<h2>Introducing: <?php echo $name; ?></h2>
<ul>
    <?php
    echo '
    <li><b>Name:</b> ' . $name . '</li>
    <li><b>Race:</b> ' . $race . '</li>
    <li><b>Role:</b> ' . $role . '</li>
    <li><b>Affiliation:</b> ' . $affiliation . '</li>';
    ?>
</ul>
<p><?php echo $description; ?></p>
<p>Return to our <a href="characters.php">characters page!</a></p>
</main>

<aside>
<h3>Character Image</h3>
<figure>
    <img src="images/<?php echo strtolower(str_replace(' ', '_', $name)); ?>.jpg" alt="<?php echo $name; ?>">
    <figcaption><?php echo $name; ?></figcaption>
</figure>
</aside>

<?php
@mysqli_free_result($result);
@mysqli_close($iConn);

include('includes/footer.php');
?>