<!-- <!doctype html> -->
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Codesteins</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,100italic' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,500' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'> -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <div class="nav-bar">
        <div class="nav-bar-container">
            <div class="logo">
                <img src="tile.png">
            </div>
            <ul class="nav-bar-list pull-left">
                <li class="nav-bar-list-item">
                    <a href="index.php">Home</a>
                </li>
                <!-- <li class="nav-bar-list-item">
                    <a href="">About</a>
                </li> -->
                <li class="nav-bar-list-item">
                    <a href="r/statistics.php">Statistics</a>
                </li>
                <!-- <li class="nav-bar-list-item">
                    <a href="">Why?</a>
                </li> -->
            </ul>
        </div>
    </div>
    <div>
    </div>
    <div class="container">
        <h1>Searching for <span style="color: #0D47A1;">medicine?</span></h1>
        <!-- <br> -->
        <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
        <div class="form-container medCompWrapper pull-left">
            <form method="GET">
                <label>Medicine Composition:</label>
                <input class="search-bars" id="search1" type="text" placeholder="Search by medicine composition">
                <br>
            </form>
        </div>
        <div class="form-container medNameWrapper pull-left">
            <form method="GET">
                <label>Medicine Name:</label>
                <input class="search-bars" id="search2" type="text" placeholder="Search by medicine name">
            </form>
        </div>
        <br>
        <div class="clearfix"></div>
        <div id="medCompResults">
            <p id="results">
                The search results will be displayed here.
            </p>
        </div>
        <div id="medNameResults">
            <p id="results">
                The search results will be displayed here.
            </p>
        </div>
    </div>
    <div class="footer">
        <div class="footer-container">
        </div>
    </div>
    <script type="text/javascript" src="js/vendor/jquery-1.11.3.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script type="text/javascript">
    // (function(b, o, i, l, e, r) {
    //     b.GoogleAnalyticsObject = l;
    //     b[l] || (b[l] =
    //         function() {
    //             (b[l].q = b[l].q || []).push(arguments)
    //         });
    //     b[l].l = +new Date;
    //     e = o.createElement(i);
    //     r = o.getElementsByTagName(i)[0];
    //     e.src = 'https://www.google-analytics.com/analytics.js';
    //     r.parentNode.insertBefore(e, r)
    // }(window, document, 'script', 'ga'));
    // ga('create', 'UA-XXXXX-X', 'auto');
    // ga('send', 'pageview');




    // window.onload = function() {
    //     var s1 = document.getElementById("search1");
    //     var s2 = document.getElementById("search2");

    //     s1.addEventListener("keyup", function(event) {
    //         var resEle = document.getElementById("results");
    //         var val = s1.value;
    //         if (window.XMLHttpRequest) {
    //             var request = new XMLHttpRequest();
    //         } else {
    //             var request = new ActiveXObject("Microsoft.XMLHTTP");
    //         }
    //         request.onreadystate = function() {
    //                 alert("adsas");
    //                 if (req.readyState == 4 && req.status == 200) {
    //                     console.log(request.responseText);
    //                     resEle.innerHTML = req.responseText;
    //                 } else {
    //                     alert("Ajax isnt working");
    //                 }
    //             }
    //         req.open("GET", "search.php?q=" + val, true);
    //         req.send();
    //         alert("search.php?q=" + val)
    //     })
    // }
    </script>
</body>

</html>
