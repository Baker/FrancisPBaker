<?php 
require_once 'config.php';
?>
  <html>
  <head>
  <title><?php print NAME; ?></title>
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-hQpvDQiCJaD2H465dQfA717v7lu5qHWtDbWNPvaTJ0ID5xnPUlVXnKzq7b8YUkbN" crossorigin="anonymous">
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.css">
   <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
   <link href="css/style.css" rel="stylesheet">
   
   <!--[if IE]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
   
	<script src="js/TweenMax.min.js"></script>
	<script src="js/jquery.min.js"></script>
  </head>
  <?php 
    include 'random_color.php'    
     ?>
  <body style="background: <?php echo $color; ?>;">  
    <div class="container">
        <div class="row about">
            <div class="z-depth-5 col s12">
                <h1 class="">Hi, I am <?php print NAME; ?></h1>
                <p><?php print BIO; ?></p>                                
                <?php
                    include 'social-media.php'
                ?>
            </div>
        </div>
        <?php include 'nav.php' ?> 
    </div>
    <script src="js/motionblur.js"></script>
	<script src="js/menu.js"></script>
  </body>
</html>