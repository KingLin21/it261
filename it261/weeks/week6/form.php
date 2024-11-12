<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our first form in week 6!</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<legend>
Contact Sebastian
</legend>
<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
<label>Gender</label>
<ul>
<li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked = "Checked"' ;?>>Female</li>
<li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked = "Checked"' ;?>>Male</li>
<li><input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked = "Checked"' ;?>>Neither</li>
</ul>
<label>Phone</label>
<input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
<label>Favorite Wines</label>
<ul>
<li><input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab', $wines)) echo 'check = "checked"';?>>Cabernet</li>
<li><input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'check = "checked"';?>>Merlot</li>
<li><input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'check = "checked"';?>>Syrah</li>
<li><input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('malbec', $wines)) echo 'check = "checked"';?>>Malbec</li>
<li><input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('red', $wines)) echo 'check = "checked"';?>>Red Blend</li>

</ul>
<label>Regions</label>
<select name="regions">
<option value="" <?php if(isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected = "unselected"'  ;?>>Select one!</option>
<option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "nw") echo 'selected = "selected"'  ;?>>Northwest</option>
<option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "sw") echo 'selected = "selected"'  ;?>>Southwest</option>
<option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "mw") echo 'selected = "selected"'  ;?>>Midwest</option>
<option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ne") echo 'selected = "selected"'  ;?>>Northeast</option>
<option value="se" <?php if(isset($_POST['regions']) && $_POST['regions'] == "se") echo 'selected = "selected"'  ;?>>Southeast</option>
</select>
<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>

<label>Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="yes" <?php  if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked = "checked"' ;?>>Yes</li>
</ul>

<input type="submit" value="Send it">
<p><a href="">Reset</a></p>
</fieldset>



</form>






    
</body>
</html>