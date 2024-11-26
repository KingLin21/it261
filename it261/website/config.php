<?php
ob_start();
define('DEBUG', 'TRUE');  // We want to see our errors

// Include credentials file for database connection
include('credentials.php');

// Error handling function
function myError($myFile, $myLine, $errorMsg)
{
    if (defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b>' . $myFile . '</b> on line: <b>' . $myLine . '</b><br>';
        echo 'Error message: <b>' . $errorMsg . '</b>';
        die();
    } else {
        echo 'Houston, we have a problem!';
        die();
    }
}

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
case 'characters.php':
$title = 'Characters page of our Website Project';
$body = 'characters inner';
break;
case 'view.php':
$title = 'Character Details - Lord of the Rings';
$body = 'view inner';
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
    'characters.php' => 'Characters',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
    $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';        
    } else {
    $my_return .= '<li><a href="'.$key.'">'.$value.'</a></li>';
    }
    
    
    }
    return $my_return;
    
    
    
    
    }

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
        $content = '<p> <b>World of Warcraft</b> is a massively multiplayer online role-playing game (MMORPG) set in the fantasy world of Azeroth. Players choose a faction and class, completing quests, exploring vast continents, and engaging in epic PvE and PvP battles.</p>';
        break;
        case 'Monday' :
        $actDay = 'red';
        $game = '<h2>Monday is our The Legend of Zelda: Breath of the Wild Day!</h2>';
        $pic = 'zelda.jpg';
        $alt = 'The Legend of Zelda: Breath of the Wild';
        $content = '<p> <b>The Legend of Zelda: Breath of the Wild</b> is a vast open-world action-adventure game where players explore the kingdom of Hyrule, solving puzzles, fighting monsters, and uncovering secrets to defeat the evil Calamity Ganon.</p>';
        break;
        case 'Tuesday' :
        $actDay = 'orange';
        $game = '<h2>Monday is our Super Mario Odyssey Day!</h2>';
        $pic = 'mario.png';
        $alt = 'Super Mario Odyssey';
        $content = '<p><b>Super Mario Odyssey</b> is a 3D platformer featuring Mario on an epic journey across different worlds to rescue Princess Peach. Players collect "Power Moons" to power Mario\’s airship while using his magical cap to possess enemies.</p>';
        break;
        case 'Wednesday' :
        $actDay = 'green';
        $game = '<h2>Wednesday is our Shadow of War Day!</h2>';
        $pic = 'war.jpg';
        $alt = 'Shadow of War';
        $content = '<p><b>Shadow of War</b> is an action role-playing game set in the world of J.R.R. Tolkien\’s Middle-earth. Players control Talion, a ranger infused with the spirit of an elf lord, as they battle against Sauron\’s forces, recruit orcs, and conquer fortresses using the innovative Nemesis system.</p>';
        break;
        case 'Thursday' :
        $actDay = 'purple';
        $game = '<h2>Thursday is our Hollow Knight Day!</h2>';
        $pic = 'knight.jpg';
        $alt = 'Hollow Knight';
        $content = '<p><b>Hollow Knight</b> is a challenging 2D action-adventure game set in a beautifully designed underground world. Players take control of a silent, mysterious knight as they explore ancient ruins and battle fierce enemies.</p>';
        break;
        case 'Friday' :
        $actDay = 'brown';
        $game = '<h2>Friday is our Minecraft Day!</h2>';
        $pic = 'minecraft.jpg';
        $alt = 'Minecraft';
        $content = '<p><b>Minecraft</b> is a sandbox game where players can build and explore limitless worlds made of blocks. With survival and creative modes, the game allows for crafting, building structures, and fending off creatures.</p>';
        break;
        case 'Saturday' :
        $actDay = 'pink';
        $game = '<h2>Saturday is our Celeste Day!</h2>';
        $pic = 'celeste.png';
        $alt = 'Celeste';
        $content = '<p><b>Celeste</b> is a pixel-art platformer about a young woman named Madeline who attempts to climb Celeste Mountain. The game features challenging puzzles, reflex-based platforming, and an emotionally driven narrative.</p>';
}


// my form's php

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$gender = '';
$genres = '';
$comments = '';
$privacy = '';
$video_games = '';
$wines = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$gender_err = '';
$genres_err = '';
$comments_err = '';
$privacy_err = '';
$video_games_err = '';
$wines_err = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['wines'])) {
        $wines_err = 'What... no wines?';
    } else {
        $wines = $_POST['wines'];
    }
    if (empty($_POST['video_games'])) {
        $video_games_err = 'What... no video games?';
    } else {
        $video_games = $_POST['video_games'];
    }

    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please fill in your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please fill in your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_err = 'Please fill in your email';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['gender'])) {
        $gender_err = 'Please select your gender';
    } else {
        $gender = $_POST['gender'];
    }

    if (empty($_POST['phone'])) {
        $phone_err = 'Your phone number please!';
    } elseif (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
        $phone_err = 'Invalid format! Use xxx-xxx-xxxx';
    } else {
        $phone = $_POST['phone'];
    }

    if (empty($_POST['comments'])) {
        $comments_err = 'We value your feedback';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['genres'])) {
        $genres_err = 'Please select a genre';
    } else {
        $genres = $_POST['genres'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_err = 'You must agree to the privacy policy.';
    } else {
        $privacy = $_POST['privacy'];
    }
    function my_wines($wines) {
        $my_return = '';
        if (!empty($_POST['wines'])) {
            $my_return = implode(', ', $_POST['wines']);
        }
        return $my_return;
    }
    function my_video_games($video_games) {
        $my_return = '';
        if (!empty($_POST['video_games'])) {
            $my_return = implode(', ', $_POST['video_games']);
        }
        return $my_return;
    }

    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['gender'], $_POST['video_games'], $_POST['comments'], $_POST['genres'], $_POST['privacy'])) {
        $to = '';
        $subject = 'Form Submission on ' . date('m/d/y, h:i A');
        $body = '
First Name: ' . $first_name . ' ' . PHP_EOL . '
Last Name: ' . $last_name . ' ' . PHP_EOL . '
Email: ' . $email . ' ' . PHP_EOL . '
Gender: ' . $gender . ' ' . PHP_EOL . '
Video Games: ' . my_video_games($video_games) . ' ' . PHP_EOL . '
Genres: ' . $genres . ' ' . PHP_EOL . '
Comments: ' . $comments . ' ' . PHP_EOL . '
Phone: ' . $phone . ' ' . PHP_EOL;

        $headers = array(
            'From' => 'noreply@studentswa.com'
        );

        if (!empty($first_name && $last_name && $email && $gender && $video_games && $genres && $phone && $comments) && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            mail($to, $subject, $body, $headers);
            header('Location: thx.php');
        }
    }
}

$photos = [
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5'
];

// Function to select and display a random image
function random_images($photos) {
    $i = rand(0, count($photos) - 1); // Generate a random index
    $selected_image = $photos[$i] . '.jpg'; // Build the file name with .jpg extension
    return '<img src="images/' . $selected_image . '" alt="' . $photos[$i] . '">';
}

$characters = [
    'Thrall' => 'thra_Warchief of the Horde and shaman.',
    'Jaina_Proudmoore' => 'jain_Powerful mage and ruler of Kul Tiras.',
    'Sylvanas_Windrunner' => 'sylv_Former Warchief and leader of the Forsaken.',
    'Anduin_Wrynn' => 'andu_Young King of Stormwind and a priest.',
    'Illidan_Stormrage' => 'illi_The Betrayer and a demon hunter.'
];