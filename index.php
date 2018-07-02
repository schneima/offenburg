<!doctype html>

<html lang="de">
<head>
    <meta charset="utf-8">
    <meta manifest="nontacet.appcache" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="nontacet Percussion Ensemble Bollschweil Freiburg Schlagzeug Quartett">
    <meta name="author" content="Markus Schneider, Nontacet">
    
    <link rel="icon" href="./images/favicon.ico">

	<title>Nontacet - Percussion Ensemble</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<?php
    $DEBUG=false;
    if($DEBUG)
    {
        echo "
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"./js/ie-emulation-modes-warning.js\"></script>
        ";
        
    }
?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template

-->
    <link href="./css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">    
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin+Slab">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"> 
</head>
<body>

    <div>
<?php
    include './container/navigation.php';
?>
</div>


<div id="Content">

<?php
        
        
function GetIncludeFile()
{
    $folder="./content/";
    $content=filter_input(INPUT_GET, 'c');
    if(!isset($content))
    {
        $content="home";
    }
    
    return $folder.$content.".php";
}


$includeFile = GetIncludeFile();
include($includeFile);
        
?>
</div>
    
    <footer>
    
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<p>Besuchen Sie auch unsere facebook Seite</p>
<p><a target="_blank" href="https://www.facebook.com/nontacet2012"><img src="images/facebook-blue-icon_32.png" >nontacet</a>
</p>
<p>
<span class="fb-like" data-href="https://www.facebook.com/nontacet2012/" 
         data-width="100" 
         data-layout="button" 
         data-action="like" 
         data-size="small" 
         data-show-faces="false" 
         data-share="true"/>

</p>    
         
</footer>  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./js/ie10-viewport-bug-workaround.js"></script>

    <?php include_once("./includes/analyticstracking.php") ?>
    
</body>
</html>