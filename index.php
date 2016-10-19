<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="app.js"></script>

</head>
<body>
<nav>
    <ul class="topnav" id="myTopnav">
        <li><a class="active" href="#home"><h6><span>D</span>W</h6></a></li>
        <li><a href="#news">Projects</a></li>
        <li><a href="#contact">Github</a></li>
        <li><a href="#about">About</a></li>
        <li class="icon">
            <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">&#9776;</a>
        </li>
    </ul>
</nav>




<div class="container">


    <div class="banner-container">
        <div class="banner" >
            <div>
                <!-- <h2><span>D</span>W</h2>
                 <h3>Technologies</h3>-->
            </div>
        </div>
    </div>

    <div class="title">
        <h2>Daniel Wellington</h2>
        <h3>Technologies</h3>
    </div>


    <div id="anchor-point" class="text-box">
        <div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.

            </p>
        </div>
    </div>

    <h3 id="projects">Blog</h3>

    <?php include "blog/index.php"?>

    <!--<div class="info-box">
         <div class="info-box-left">
             <div>
                 <p></p>
             </div>
         </div>

         <div class="info-box-right">
             <div>
                 <p></p>
             </div>
             <div>
                 <p></p>
             </div>
         </div>
     </div>-->



    <div class="video-box">
        <div class="video-box-container">
            <div id="ytplayer">

            </div>
        </div>

        <div class="video-box-text">
            <h4>#DANIELWELLINGTON</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>


    </div>



</div>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

<footer>
    <div id="footer-logo">
        <h6><span>D</span>W</h6>
        <p>Daniel Wellington</p>
    </div>
    <div id="dwtech">dwtechnologies</div>
    <div id="DW">&copy; Daniel Wellington 2016</div>
</footer>
</body>
</html>