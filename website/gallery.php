<?php
include('config.php');
include('includes/header.php');
?>
<div id="wrapper">

    <main>
        <h1>World of Warcraft Character Gallery</h1>
        <p>Welcome to our World of Warcraft gallery! Here, you'll find some of the most iconic characters along with their descriptions.</p>
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Character Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($characters as $name => $image): ?>
                    <tr>
                        <!-- Image Column -->
                        <td>
                            <img src="images/<?php echo substr($image, 0, 4); ?>.jpg" 
                                 alt="<?php echo str_replace('_', ' ', $name); ?>" style="width:400px;">
                        </td>
                        <!-- Name Column -->
                        <td>
                            <?php echo str_replace('_', ' ', $name); ?>
                        </td>
                        <!-- Description Column -->
                        <td>
                            <?php echo substr($image, 5); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>


</div>
<!-- end of wrapper -->

<?php
include('includes/footer.php');