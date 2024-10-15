<?php
// class coffee exercise
//if today is Friday, it will be pumpkin latte day
// Introducing the isset() function
//then we will introduce our firstl global variables
//our switch



//starting the switch
// if $GET['today'] is set, $today, then all is well, but it is not set therefore the else is the day!
//else, today is TODAY

//GLOBAL VARIABLES are vapitalized and start with $_GET

//what si the isset function - is asking if something has been set?

//$variable = 'This is our variable';
//if(isset($variable)) {
//    echo 'Variable has been set';
//} else
//echo 'Variable has not been set!';

//echo '<br>';

//if(isset($_GET['today'])) {
    //echo 'Today has been set';
//} else {
    //echo 'NOT!!!!!';
//}

if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l');
}

switch($today) {
case 'Sunday' :
$game = '<h2>Sunday is our World of Warcraft Day!</h2>';
$pic = 'wow.jpg';
$alt = 'World of Warcraft';
$content = '<p> <b>World of Warcraft<b> is A massively multiplayer online role-playing game (MMORPG) set in the fantasy world of Azeroth. Players choose a faction and class, completing quests, exploring vast continents, and engaging in epic PvE and PvP battles.</p>';
break;
case 'Monday' :
$game = '<h2>Monday is our The Legend of Zelda: Breath of the Wild Day!</h2>';
$pic = 'zelda.jpg';
$alt = 'The Legend of Zelda: Breath of the Wild';
$content = '<p> <b>The Legend of Zelda: Breath of the Wild<b> is A vast open-world action-adventure game where players explore the kingdom of Hyrule, solving puzzles, fighting monsters, and uncovering secrets to defeat the evil Calamity Ganon.</p>';
break;
case 'Tuesday' :
$game = '<h2>Monday is our Super Mario Odyssey Day!</h2>';
$pic = 'mario.png';
$alt = 'Super Mario Odyssey';
$content = '<p><b>Super Mario Odyssey<b> is A 3D platformer featuring Mario on an epic journey across different worlds to rescue Princess Peach. Players collect "Power Moons" to power Mario\’s airship while using his magical cap to possess enemies.</p>';
break;
case 'Wednesday' :
$game = '<h2>Wednesday is our Shadow of War Day!</h2>';
$pic = 'war.jpg';
$alt = 'Shadow of War';
$content = '<p><b>Shadow of War<b> is An action role-playing game set in the world of J.R.R. Tolkien\’s Middle-earth. Players control Talion, a ranger infused with the spirit of an elf lord, as they battle against Sauron\’s forces, recruit orcs, and conquer fortresses using the innovative Nemesis system.</p>';
break;
case 'Thursday' :
$game = '<h2>Thursday is our Hollow Knight Day!</h2>';
$pic = 'knight.jpg';
$alt = 'Hollow Knight';
$content = '<p><b>Hollow Knight<b> is A challenging 2D action-adventure game set in a beautifully designed underground world. Players take control of a silent, mysterious knight as they explore ancient ruins and battle fierce enemies.</p>';
break;
case 'Friday' :
$game = '<h2>Friday is our Minecraft Day!</h2>';
$pic = 'minecraft.jpg';
$alt = 'Minecraft';
$content = '<p><b>Minecraft<b> is A sandbox game where players can build and explore limitless worlds made of blocks. With survival and creative modes, the game allows for crafting, building structures, and fending off creatures.</p>';
break;
case 'Saturday' :
$game = '<h2>Saturday is our Celeste Day!</h2>';
$pic = 'celeste.png';
$alt = 'Celeste';
$content = '<p><b>Celeste<b> is A pixel-art platformer about a young woman named Madeline who attempts to climb Celeste Mountain. The game features challenging puzzles, reflex-based platforming, and an emotionally driven narrative.</p>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
        *{
            padding:0;
            margin: 0;
            box-sizing:border-box;
        }
        #wrapper {
            width: 940px;
            margin:20px auto;
        }
        h1, h2, img {
            margin-bottom:10px;
        }
        p {
            margin-bottom: 20px;
        }
        img {
            width:100%;
        }
        </style>
</head>
<body>
<div id = "wrapper">
<h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
<?php
echo $game
?>
<img src ="./images/<?php echo $pic;?>" alt ="<?php echo $alt;?>">
<?php echo $content; ?>
<h2>Check out our Daily Specials</h2>
<ul>
<li><a href="switch.php?today=Sunday">Sunday</a></li>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>
<li><a href="switch.php?today=Saturday">Saturday</a></li>
</ul>
</div>
<!-- end wrapper -->
</body>
</html>

