<?php   // this is our index.php page which in big picture, it represents the home page

session_start();
include('config.php');

// if the username has NOT been set, you will be see the index.php file

if(!isset($_SESSION['username'])) {

    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');

}

include('includes/header.php'); ?>
<header>

<?php 
if(isset($_SESSION['success'])) :?>

<div class="success">
<h3>
<?php echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>
</div>

<?php endif;

if(isset($_SESSION['username'])) :?>

<div class="welcome-logout">
<h3> Hello
<?php echo $_SESSION['username'] ;?>
</h3>
<a href="index.php?logout='1'" > Log out </a>
</div>

<?php endif ;?>
</header>
<!--My wrapper starts here -->
<div id="wrapper">
<h1>Welcome to the home page of our website!!!</h1>

</div>

<?php include('includes/footer.php');?>