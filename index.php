<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/forms-min.css">
        <link rel="stylesheet" href="css/buttons-min.css">
        <link href='http://fonts.googleapis.com/css?family=Voces' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body id="main-body">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container">
            <div class="top-logo">
                <img class="top-logo-img" src="img/top-logo.png"><p class="title"><span class="special">SIG</span> generator</p>
            </div>
            <form class="form" action="sig.php">
               
                    <input type="text" class="aninput" placeholder="First Name" name="first" id="first" onblur="firstFunction()">
                    <input type="text" class="aninput" placeholder="Last Name" name="last" id="last" onblur="lastFunction()">
                    <input type="text" class="aninput" placeholder="Position" name="position" id="position" onblur="posFunction()">                    
                    <h1 class="form-head">Type <b>x</b> for extensions (<i>i.e. 123 456 7890x1111</i>)</h1> 
                <fieldset class="inputs">
                    <input type="text" class="aninput" placeholder="Work Phone" name="work" id="work" onblur="workFunction()">
                    <input type="text" class="aninput" placeholder="Cell Phone" name="cell" id="cell" onblur="cellFunction()">
                </fieldset>
                    <h1 class="form-head">Blank fields will be excluded from final signature.</h1> 
                <fieldset class="inputs">
                    <input type="text" class="aninput" placeholder="Twitter URL" name="twitter" id="tweet" onblur="httpFunction('tweet')">
                    <input type="text" class="aninput" placeholder="Github URL" name="github" id="github" onblur="httpFunction('github')">
                    <input type="text" class="aninput" placeholder="Facebook URL" name="facebook" id="facebook" onblur="httpFunction('facebook')">
                    <input type="text" class="aninput" placeholder="Flickr URL" name="flickr" id="flickr" onblur="httpFunction('flickr')">
                    <input type="text" class="aninput" placeholder="Instagram URL" name="instagram" id="instagram" onblur="httpFunction('instagram')">
                    <input type="text" class="aninput" placeholder="Foursquare URL" name="foursquare" id="foursquare" onblur="httpFunction('foursquare')">
                </fieldset>

                <button type="submit" class="button aninput">Generate</button>
            </form>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
