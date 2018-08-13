<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/fontawesome-free-5.0.12/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="./View/home/home.css">
    <link rel="stylesheet" href="./View/friends-panel/friends-panel.css">
    <link rel="stylesheet" href="./View/post/post.css">
    <link rel="stylesheet" href="./View/chatbox/chatbox.css">
    <title>Facebook</title>
</head>

<body>
<?php include_once('View/home-nav-bar/home_navbar.php')?>

    <div class="jumbotron">
        <div class="fixed fixed-1" id="fixed_1">
            <div class="card">
                <h1>hello</h1>
            </div>

        </div>
        <div class="main-content">
                  <!--posts-->
                  <?php include_once('View/post/post.php')?>    
        </div>
       <?php include_once('View/friends-panel/friends-panel.php')?>
        <div class="fixed-3 fixed" >
            <a href="#" class="serch_friends_font">
                <i class="fas fa-search"></i>
            </a>
            <div class="input_serch_friends_container">
                <input type="search" placeholder="Serch.." class="input_serch_friends" >
            </div>
            
            <a href="#" class="serch_friends_font">
                <i class="fas fa-search"></i>
            </a>
            <a href="#" class="serch_friends_font">
                <i class="fas fa-search"></i>
            </a>
            <a href="#" class="serch_friends_font">
                <i class="fas fa-search"></i>
            </a>
        </div>
    </div>
   <?php include_once('View/chatbox/chatbox.php') ?>
        

    
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script src="./View/home/home.js"></script>
    <script src="View/friends-panel/friends-panel.js"></script> 
    <script src="View/chatbox/chatbox.js"></script>       
    <script src="View/home-nav-bar/home_navbar.js"></script>     
</body>

</html>