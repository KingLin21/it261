<?php
include('config.php');
include('./includes/header.php');
?>
    <div id="wrapper">
    
    
    <main>
        <h1>Welcome to our Daily Page!</h1>
        <p>In this assignment I am going to be showcasing my switch with a variety of video games while giving a small description of each game.</p>
        <h2 style="color:<?php echo $actDay; ?>;"><?php echo $game; ?></h2>
            <p><?php echo $content; ?></p>
            <h2>Don't see a game you enjoy? Check out the days below!</h2>

            <ul>
            <li><a style="color:<?php
                if($today == 'Sunday' ) {
                    echo 'black';
                } else {
                    echo 'blue';
                } ; ?>" href="daily.php?today=Sunday">Sunday</a>
            </li>

            <li><a style="color:<?php
                if($today == 'Monday' ) {
                    echo 'red';
                } else {
                    echo 'blue';
                } ; ?>" href="daily.php?today=Monday">Monday</a>
            </li>

            <li><a style="color:<?php
                if($today == 'Tuesday' ) {
                    echo 'orange';
                } else {
                    echo 'blue';
                } ; ?>" href="daily.php?today=Tuesday">Tuesday</a>
            </li>

            <li><a style="color:<?php
                if($today == 'Wednesday' ) {
                    echo 'green';
                } else {
                    echo 'blue';
                } ; ?>" href="daily.php?today=Wednesday">Wednesday</a>
            </li>

            <li><a style="color:<?php
                if($today == 'Thursday' ) {
                    echo 'purple';
                } else {
                    echo 'blue';
                } ; ?>" href="daily.php?today=Thursday">Thursday</a>
            </li>
            
            <li><a style="color:<?php
                if($today == 'Friday' ) {
                    echo 'brown';
                } else {
                    echo 'blue';
                } ; ?>" href="daily.php?today=Friday">Friday</a>
            </li>
            <li><a style="color:<?php
                if($today == 'Saturday' ) {
                    echo 'pink';
                } else {
                    echo 'blue';
                } ; ?>" href="daily.php?today=Saturday">Saturday</a>
            </li>
        
        
        
        </ul>
    </main>

    <aside>
    <img src ="./images/<?php echo $pic;?>" alt ="<?php echo $alt;?>">
    
    </aside>

    </div>
    <!--end of wrapper-->

    <?php
    include('./includes/footer.php');