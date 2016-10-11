<?php 
require_once 'config.php';
?>
  <html>
  <head>
  <title>Contact <?php print NAME; ?></title>
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-hQpvDQiCJaD2H465dQfA717v7lu5qHWtDbWNPvaTJ0ID5xnPUlVXnKzq7b8YUkbN" crossorigin="anonymous">
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.css">
   <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
   <link href="css/style.css" rel="stylesheet">
   
   <!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
   
	<script src="js/TweenMax.min.js"></script>
	<script src="js/jquery.min.js"></script>
  </head>
  <?php 
    include 'random_color.php'    
     ?>
  <body style="background: <?php echo $color; ?>;">  
    <div class="container z-depth-5">
        <div class="row contact">
                   <div class="col s12">
                      <div class="contact-space"><br><br></div>
                       <h1>Contact Us</h1>
                       <p> </p>
                   </div>                    
                    <div class="left col s8">
						<form action="https://formspree.io/<?php print EMAIL; ?>" method="post">
						   <div class="input-field">
							   <input id="name" type="text" autocomplete="name" class="validate" placeholder="John Smith">
						   </div>
						   <div class="input-field">
							   <input id="email" type="text"  name="_replyto" autocomplete="email" class="validate" placeholder="some@email.tld">
						   </div>
						  <div class="input-field">
							<textarea id="textarea1" name="message" class="materialize-textarea" placeholder="Some important message"></textarea>
							<input type="hidden" name="_format" value="plain" />
						  </div>
							<div class="input-field">
								<input class="submit-btn btn" type="submit" value="Send">
							</div>
                        </form>
					</div>
               <div class="right-side">
                <?php
                    include 'contact-social-media.php'
                ?>
              	 </div>
            </div>
    </div>
    <?php include 'nav.php' ?> 
    <script src="js/motionblur.js"></script>
	<script src="js/menu.js"></script>
  </body>
</html>