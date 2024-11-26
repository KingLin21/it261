<?php
include('server.php');
//include('includes/header.php');

?>

<h1>Our Login Page!</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) :?>" method="post">
<fieldset>
<label>Username</label>
<input type="text" name="username" value="<?php if(isset($_POST['userbane'])) echo $_POST['username'] ;?>">

<label>Password</label>
<input type="password" name="password" value="<?php if(isset($_POST['userbane'])) echo $_POST['username'] ;?>">

<button type="submit" name="login_user" class="btn">Register</button>
<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>' ">Reset</button>


</fieldset>
</form>
<?php
include('errors.php'); ?>