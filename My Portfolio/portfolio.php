<?php 
require_once 'config.php';
?>
  <html>
  <head>
  <title><?php print NAME; ?>'s Portfolio</title>
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-hQpvDQiCJaD2H465dQfA717v7lu5qHWtDbWNPvaTJ0ID5xnPUlVXnKzq7b8YUkbN" crossorigin="anonymous">
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.css">
   <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
   <link href="css/style.css" rel="stylesheet">
   
   <!--[if IE]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
   
	<script src="js/TweenMax.min.js"></script>
	<script src="js/jquery.min.js"></script>
  </head>
  <?php 
    include 'random_color.php'    
     ?>
  <body style="background: <?php echo $color; ?>;">  
    <div class="container">
        <div class="row Portfolio">
            <div class="z-depth-5 col s12">
                <h1 class="">Portfolio</h1>
                <p> <?php print PORTFOLIODESC; ?></p>
                
                <div class="Portfolio-entry">
                    <h3> <?php print entrytitleone; ?> - <a target="_blank" href="<?php print entrylinkone; ?>"><i class="fa fa-external-link" aria-hidden="true"></i></a></h3>
                    <div class="date-created"><span>Created: <?php print entrydateone; ?></span></div>
                    <p><?php print entrydescone; ?></p>
                   
                    <h3> <?php print entrytitletwo; ?> - <a target="_blank" href="<?php print entrylinktwo; ?>"><i class="fa fa-external-link" aria-hidden="true"></i></a></h3>
                    <div class="date-created"><span>Created: <?php print entrydatetwo; ?></span></div>
                    <p><?php print entrydesctwo; ?></p>
                
                    <h3> <?php print entrytitlethree; ?> - <a target="_blank" href="<?php print entrylinkthree; ?>"><i class="fa fa-external-link" aria-hidden="true"></i></a></h3>
                    <div class="date-created"><span>Created: <?php print entrydatethree; ?></span></div>
                    <p><?php print entrydescthree; ?></p>
                    
                    <h3> <?php print entrytitlefour; ?> - <a target="_blank" href="<?php print entrylinkfour; ?>"><i class="fa fa-external-link" aria-hidden="true"></i></a></h3>
                    <div class="date-created"><span>Created: <?php print entrydatefour; ?></span></div>
                    <p><?php print entrydescfour; ?></p>
                    
                    <h3> <?php print entrytitlefive; ?> - <a target="_blank" href="<?php print entrylinkfive; ?>"><i class="fa fa-external-link" aria-hidden="true"></i></a></h3>
                    <div class="date-created"><span>Created: <?php print entrydatefive; ?></span></div>
                    <p><?php print entrydescfive; ?></p>
                                           
                    <h3> <?php print entrytitlesix; ?> - <a target="_blank" href="<?php print entrylinksix; ?>"><i class="fa fa-external-link" aria-hidden="true"></i></a></h3>
                    <div class="date-created"><span>Created: <?php print entrydatesix; ?></span></div>
                    <p><?php print entrydescsix; ?></p>                       
                    
                    <h3> <?php print entrytitleseven; ?> - <a target="_blank" href="<?php print entrylinkseven; ?>"><i class="fa fa-external-link" aria-hidden="true"></i></a></h3>
                    <div class="date-created"><span>Created: <?php print entrydateseven; ?></span></div>
                    <p><?php print entrydescseven; ?></p>       
                </div>
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