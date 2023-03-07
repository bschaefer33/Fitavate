<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    Team: Jimma Shanko, Tram-Anh Ngo, Dominic Cummings, Brittany Schaefer
    Project: Fitavate
    Page: User Home Page
    Date Created: 2-8-22
    Date Updated: 3-6-22
    By: Brittany Schaefer
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "styleSheet" href="styleSheet.css">
    <title>Fitavate</title>
</head>
<body>
    <header>
        <div id="headerContentLeft">
            <img src="graphic/logo.png" alt="Logo">
        </div>
        <div id="headerContentMiddle">
            <img src="graphic/fitavate.png" alt="Fitavate">
        </div>
    </header>
    <div class="pageContainer">
        <div class= "Column left">
        <div class="leftNavigationBar">
            <ul>
                <li><a href="profile.php"><img src="graphic/profilePic.jpg" alt="Profile Picture"></a>
                <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
                <li><a href="notifications.php">Notifications</a></li>
                <li><a href="<?php echo site_url('fitine_home'); ?>">FitTines</a></li>
                <li><a href="followers.php">Followers</a></li>
                <li><a href="following.php">Following</a></li>
                <li><a href="messages.php">Messages</a></li>
            </ul>
        </div>
        </div>
        <div class="Column middle">
            
            <?= $this->renderSection('content') ?>
        </div>
        <div class="Column right">
            <div class="rightNavigationBar">
                <div class="searchBar">
                    <p>searchBar</p>
                </div>
                <div class="rightLogo">
                    <img src="graphic/logo.png" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <div id = "footer">
        <p>CopyRight Fitavate 2023</p>
    </div>
</body>
</html>
