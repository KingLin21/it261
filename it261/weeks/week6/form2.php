<?php
ob_start();
$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$gender = '';
$regions = '';
$comments = '';
$privacy = '';
$wines = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$gender_err = '';
$regions_err = '';
$comments_err = '';
$privacy_err = '';
$wines_err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['wines'])) {
$wines_err = 'What... no wines?';

} else {
    $wines= $_POST['wines'];
}

if(empty($_POST['first_name'])) {
    $first_name_err = 'Please fill in your first name';
    
    } else {
        $first_name= $_POST['first_name'];
    }
    
if(empty($_POST['last_name'])) {
        $last_name_err = 'Please fill in your last name';
        
    } else {
            $last_name= $_POST['last_name'];
    }
if(empty($_POST['email'])) {
        $email_err = 'Please fill in your email';
        
    } else {
            $email= $_POST['email'];
    }

if(empty($_POST['gender'])) {
        $gender_err = 'Please check your gender';
        
    } else {
            $gender= $_POST['gender'];
    }

if(empty($_POST['phone'])) {
        $phone_err = 'Please fill in your phone number';
        
    } else {
            $phone= $_POST['phone'];
    }
if(empty($_POST['comments'])) {
        $comments_err = 'We value your feedback';
        
    } else {
            $comments= $_POST['comments'];
    }
if(empty($_POST['regions'])) {
        $regions_err = 'Please fill in your region';
        
    } else {
            $regions= $_POST['regions'];
    }

if(empty($_POST['privacy'])) {
        $privacy_err = 'You must be agree to receive spam email!';
        
    } else {
            $privacy= $_POST['privacy'];
    }

function my_wines($wines) {
    $my_return='';
    if(!empty($_POST['wines'])) {
        $my_return = implode(',' , $_POST['wines']);
    }
    return $my_return;
}
}
if(isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['gender'], $_POST['wines'], $_POST['comments'], $_POST['regions'], $_POST['privacy'])) {
$to = 'sebastianlinhart112@gmail.com';
$subject = 'Test email on '.date('m/d/y, h i A');
$body = '
First Name: '.$first_name.' '.PHP_EOL.'
Last Name: '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Gender: '.$gender.' '.PHP_EOL.'
Wine: '.my_wines($wines).' '.PHP_EOL.'
Regions: '.$regions.' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'



';
$headers = array(
    'From' => 'noreply@studentswa.com'
);

if(!empty(
    $first_name && $last_name && $email && $gender && $wines && $regions && $phone && $comments)) {
        mail($to, $subject, $body, $headers);
        header ('location:thx.php');
    }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Second form in week 6!</title>
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
<span><?php echo $first_name_err ;?></span>
<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
<span><?php echo $last_name_err ;?></span>
<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
<span><?php echo $email_err ;?></span>
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
<span><?php echo $wine_err ;?></span>
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