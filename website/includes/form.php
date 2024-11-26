<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <legend>Contact Sebastian</legend>
        
        <label>First Name</label>
        <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
        <span><?php echo $first_name_err; ?></span>
        
        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
        <span><?php echo $last_name_err; ?></span>
        
        <label>Email</label>
        <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
        <span><?php echo $email_err; ?></span>
        
        <label>Gender</label>
        <ul>
            <li><input type="radio" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>>Female</li>
            <li><input type="radio" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>>Male</li>
            <li><input type="radio" name="gender" value="other" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'checked="checked"'; ?>>Other</li>
        </ul>
        <span><?php echo $gender_err; ?></span>
        
        <label>Phone</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
        <span><?php echo $phone_err; ?></span>
        
        <label>Favorite Video Games</label>
        <ul>
            <li><input type="checkbox" name="video_games[]" value="The Legend of Zelda" <?php if (isset($_POST['video_games']) && in_array('The Legend of Zelda', $_POST['video_games'])) echo 'checked="checked"'; ?>>The Legend of Zelda</li>
            <li><input type="checkbox" name="video_games[]" value="Super Mario Bros" <?php if (isset($_POST['video_games']) && in_array('Super Mario Bros', $_POST['video_games'])) echo 'checked="checked"'; ?>>Super Mario Bros</li>
            <li><input type="checkbox" name="video_games[]" value="Minecraft" <?php if (isset($_POST['video_games']) && in_array('Minecraft', $_POST['video_games'])) echo 'checked="checked"'; ?>>Minecraft</li>
            <li><input type="checkbox" name="video_games[]" value="Fortnite" <?php if (isset($_POST['video_games']) && in_array('Fortnite', $_POST['video_games'])) echo 'checked="checked"'; ?>>Fortnite</li>
            <li><input type="checkbox" name="video_games[]" value="Call of Duty" <?php if (isset($_POST['video_games']) && in_array('Call of Duty', $_POST['video_games'])) echo 'checked="checked"'; ?>>Call of Duty</li>
        </ul>
        <span><?php echo $video_games_err; ?></span>
        
        <label>Favorite Genres</label>
        <select name="genres">
            <option value="" <?php if (isset($_POST['genres']) && $_POST['genres'] == '') echo 'selected="selected"'; ?>>Select one!</option>
            <option value="RPG" <?php if (isset($_POST['genres']) && $_POST['genres'] == "RPG") echo 'selected="selected"'; ?>>RPG</option>
            <option value="Shooter" <?php if (isset($_POST['genres']) && $_POST['genres'] == "Shooter") echo 'selected="selected"'; ?>>Shooter</option>
            <option value="Adventure" <?php if (isset($_POST['genres']) && $_POST['genres'] == "Adventure") echo 'selected="selected"'; ?>>Adventure</option>
            <option value="Puzzle" <?php if (isset($_POST['genres']) && $_POST['genres'] == "Puzzle") echo 'selected="selected"'; ?>>Puzzle</option>
            <option value="Sports" <?php if (isset($_POST['genres']) && $_POST['genres'] == "Sports") echo 'selected="selected"'; ?>>Sports</option>
        </select>
        <span><?php echo $genres_err; ?></span>
        
        <label>Comments</label>
        <textarea name="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
        <span><?php echo $comments_err; ?></span>
        
        <label>Privacy</label>
        <ul>
            <li><input type="radio" name="privacy" value="yes" <?php if (isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked="checked"'; ?>>Yes</li>
        </ul>
        <span><?php echo $privacy_err; ?></span>
        
        <input type="submit" value="Send it">
        <p><a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">Reset</a></p>
    </fieldset>
</form>