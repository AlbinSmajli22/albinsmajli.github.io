<?php
include_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ca239450f5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <title>Document</title>
    <Style>
       
    </Style>
</head>
<body id="body">
    
   

    <div id="home">

    <div id="header">
        <div id="le">
            <div id="logo"><h3>AS</h3></div>
            <h2 id="emri">Albin Smajli</h2>
        </div>
        <ul>
            <li><a class="navbars" href="#home">Home</a></li>
            <li><a class="navbars" href="#social-media">Skills and Exp.</a></li>
            <li><a class="navbars" href="#projects">Projects</a></li>
            <li><a class="navbars" href="#Contact">Contact</a></li>
        </ul>

    </div>
       
       <div id="intro">
        <h1>I'm Albin Smajli. A Web developer</h1><h1> based on Kosovo.</h1>
        <p>I'm probably the most passionate developer you will ever get to work with.</p> 
        <p> If you have a great project that needs some amazing skills, I'm your guy.</p>
        <Div class="scrd" style="width: 2em; height: 2em; background-color: transparent; z-index: 80; 
            bottom: 25px; position: absolute; border-width: 0 0.25em 0.25em 0; border-style: solid; 
            border-color: #0d0d0d; animation: scrolldown 1.2s ease-in-out infinite 0.15s;">
        </Div>

        <Div class="scrd" style="width: 2em; height: 2em; background-color: transparent; z-index: 80; 
            bottom: 40px; position: absolute; border-width: 0 0.25em 0.25em 0;
            border-style: solid; border-color: #0d0d0d; animation: scrolldown 1.2s ease-in-out infinite;">
        </Div>
       </div>
    </div>
    <div id="social-media">
        <div id="left">
                
            <div id="ikonat">
                <div id="title1">
                    <h1 >Skills And Experience</h1>
                </div>
                    <div class="ikonat1">
                        <a href="https://www.w3schools.com/html/"><i id="html"class="fa-brands fa-html5"></i></a>
                        <a href="https://www.w3schools.com/js/"><i id="js" class="fa-brands fa-js"></i></a>
                        <a href="https://www.w3schools.com/css/"><i id="css" class="fa-brands fa-css3-alt"></i></a>
                    </div>
                    <div class="ikonat1">
                        <a href="https://laravel.com/"><i id="laravel" class="fa-brands fa-laravel"></i></a>
                        <a href="https://www.php.net/"><i id="php" class="fa-brands fa-php"></i></a>
                        <a href="https://reactjs.org/"><i id="react" class="fa-brands fa-react"></i></i></a>
                    </div>
            
            </div>
            
        </div>
        <div id="right">
            <h1>
                Employment history:
            </h1>
            <br>
            <p>1. StarLabs - As intern for three months.</p>
        </div>
    </div>
    <div id="projects">
        <div id="intro2">
            <h1>Get an overview
            <br>
            of my latest projects
            </h1>
        </div>
           
      <div id="repo" >

      </div>
    
       
    </div>
    <div id="Contact">
        <div id="majt" >
            <div id="intro3">
                <h1>Contact Albin</h1>
            </div>
            <h3>
                <i class="fa-solid fa-envelope"></i>
                Email Me: <a Style=" color:black"  href="mailto:smajlialbin@gmail.com">smajlialbin@gmail.com</a>
                <br>
                <i class="fa-solid fa-phone"></i>
                Call Me: <a Style=" color:black" href="tel:+38345579712">(+383)45-579-712</a>
            </h3>
            
        </div>
        <div id="djatht">
            <form action="messages.php" method="post">
                
                <div>
                    <h3 id="title">Leave a comment</h3>
                    <input class="data" type="text" name="emri" placeholder="First Name"><br>
                    <div class="line2"></div>
                    <input class="data" type="text" name="mbiemri" placeholder="Last Name"><br>
                    <div class="line2"></div>
                    <input class="data" type="email" name="email" placeholder="E-mail"><br>
                    <div class="line2"></div>
                    <button id="submit" type="submit" name="submit">Sent Message</button>
                </div>
                <div>
                    <textarea name="comment" id="comment" cols="30" rows="10"  placeholder="Comment"></textarea>
                    <div class="line2"></div>
                    
                </div>
            </form>
        </div>
    </div>
<footer>
    <div id="diamond"></div>
    <br>
    <p>
    &#169; 2022
    <br>
    Created by <a href="#">Albin Smajli</a>
    <br>
    Hosted by <a href="">Hostinger</a>
    </p>
    <br>
    <div id="endingLine"></div>
    <br>
    <div id="footerIkons">
    <a href="https://www.instagram.com/albin.smajlii/"> <i class="fa-brands fa-instagram"></i> </a>
    <a href="https://www.facebook.com/albini.bini8"><i class="fa-brands fa-square-facebook"></i> </a>
    <a href="https://twitter.com/Albin77245129"><i class="fa-brands fa-square-twitter"></i> </a>
    <a href="https://www.linkedin.com/in/albin-smajli-534b92229/"><i class="fa-brands fa-linkedin"></i> </a>
    <a href="https://github.com/settings/profile"><i class="fa-brands fa-github"></i> </a>
    <a href="https://steamcommunity.com/profiles/76561198969645026/"><i class="fa-brands fa-steam"></i> </a>
    <a href="https://www.twitch.tv/b1ni_cs"><i class="fa-brands fa-twitch"></i> </a>
   </div>
</footer>
    <script type="text/javascript" src="script/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="script/main.js"></script>
</body>
</html>
