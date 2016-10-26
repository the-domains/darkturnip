<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dark Turnip</title>
        <meta charset="utf-8">
        <meta name='author' content='darkturnip.com'>
        <meta name='description' content=''>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
        
        <link rel='stylesheet' type='text/css' href='general.css?v=<?php echo mt_rand()?>'>
        <link rel='shortcut icon' href='/icons/icon.ico'>
    </head>
    
    <body>
            <div id="header"> <!-- load header -->
                <?php include 'header.php'; ?>
            </div>
            <div id="menu"> <!-- load menu -->
                <?php include 'menu.php'; ?>
            </div>
            <div id="content"> <!-- load content -->
                <?php include 'content.php'; ?>
            </div>
            <div id="footer"> <!-- load footer -->
                <?php include 'footer.php'; ?>
            </div>
        
        <script>
            var img_height = window.innerHeight - document.getElementById("header").offsetHeight - document.getElementById("menu").offsetHeight - document.getElementById("footer").offsetHeight;
            var img_text = '<img src="landing.jpg" style="max-height:'+img_height+'px;" class="img-responsive center-block">';
            document.getElementById("landingimg").innerHTML=img_text;
        </script>
        
        <?php include 'find_content.php'; ?>
        
    </body>
    
</html>
