<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
case 'index.php' :
$title = 'Home page of our Website Project';
$body = 'home';
break;
case 'about.php' :
$title = 'About page of our Website Project';
$body = 'about inner';
break;

case 'daily.php' :
$title = 'Daily page of our Website Project';
$body = 'daily inner';
break;
case 'project.php' :
$title = 'Project page of our Website Project';
$body = 'project inner';
break;
case 'contact.php' :
$title = 'Contact page of our Website Project';
$body = 'contact inner';
break;
case 'gallery.php' :
$title = 'Gallery page of our Website Project';
$body = 'gallery inner';
break;
}
// our navigational array
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

//homework 3 starts here
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Sunday' :
        $actDay = 'black';
        $game = '<h2>Sunday is our World of Warcraft Day!</h2>';
        $pic = 'wow.jpg';
        $alt = 'World of Warcraft';
        $content = '<p> <b>World of Warcraft<b> is a massively multiplayer online role-playing game (MMORPG) set in the fantasy world of Azeroth. Players choose a faction and class, completing quests, exploring vast continents, and engaging in epic PvE and PvP battles.</p>';
        break;
        case 'Monday' :
        $actDay = 'red';
        $game = '<h2>Monday is our The Legend of Zelda: Breath of the Wild Day!</h2>';
        $pic = 'zelda.jpg';
        $alt = 'The Legend of Zelda: Breath of the Wild';
        $content = '<p> <b>The Legend of Zelda: Breath of the Wild<b> is a vast open-world action-adventure game where players explore the kingdom of Hyrule, solving puzzles, fighting monsters, and uncovering secrets to defeat the evil Calamity Ganon.</p>';
        break;
        case 'Tuesday' :
        $actDay = 'orange';
        $game = '<h2>Monday is our Super Mario Odyssey Day!</h2>';
        $pic = 'mario.png';
        $alt = 'Super Mario Odyssey';
        $content = '<p><b>Super Mario Odyssey<b> is a 3D platformer featuring Mario on an epic journey across different worlds to rescue Princess Peach. Players collect "Power Moons" to power Mario\’s airship while using his magical cap to possess enemies.</p>';
        break;
        case 'Wednesday' :
        $actDay = 'green';
        $game = '<h2>Wednesday is our Shadow of War Day!</h2>';
        $pic = 'war.jpg';
        $alt = 'Shadow of War';
        $content = '<p><b>Shadow of War<b> is an action role-playing game set in the world of J.R.R. Tolkien\’s Middle-earth. Players control Talion, a ranger infused with the spirit of an elf lord, as they battle against Sauron\’s forces, recruit orcs, and conquer fortresses using the innovative Nemesis system.</p>';
        break;
        case 'Thursday' :
        $actDay = 'purple';
        $game = '<h2>Thursday is our Hollow Knight Day!</h2>';
        $pic = 'knight.jpg';
        $alt = 'Hollow Knight';
        $content = '<p><b>Hollow Knight<b> is a challenging 2D action-adventure game set in a beautifully designed underground world. Players take control of a silent, mysterious knight as they explore ancient ruins and battle fierce enemies.</p>';
        break;
        case 'Friday' :
        $actDay = 'brown';
        $game = '<h2>Friday is our Minecraft Day!</h2>';
        $pic = 'minecraft.jpg';
        $alt = 'Minecraft';
        $content = '<p><b>Minecraft<b> is a sandbox game where players can build and explore limitless worlds made of blocks. With survival and creative modes, the game allows for crafting, building structures, and fending off creatures.</p>';
        break;
        case 'Saturday' :
        $actDay = 'pink';
        $game = '<h2>Saturday is our Celeste Day!</h2>';
        $pic = 'celeste.png';
        $alt = 'Celeste';
        $content = '<p><b>Celeste<b> is a pixel-art platformer about a young woman named Madeline who attempts to climb Celeste Mountain. The game features challenging puzzles, reflex-based platforming, and an emotionally driven narrative.</p>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body ;?>">
    <header>
        <div class="inner-header">
        <a href="index.php">
            <img id="logo" src="images/logo.png" alt="logo">
        </a>
        <!--<nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Daily</a></li>
            <li><a href="">Project</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Gallery</a></li>
        </ul>    
        </nav> -->

        <nav>
        <ul>
        <?php
        foreach($nav as $key => $value) {
            if(THIS_PAGE == $key) {
                echo '<li><a style="color:red;" href=" '.$key.'"> '.$value.' </a></li>';
            } else {
                echo '<li><a style="color:black;"href=" '.$key.'"> '.$value.' </a></li>';
            }
            
            } // end foreach


        ?>
        </ul>
        </nav>

        </div>
        <!--end inner-header-->
    </header>