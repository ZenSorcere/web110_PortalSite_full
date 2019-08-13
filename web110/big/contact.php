<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Mike Gilson: BIG Project</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />  
 </head>
 <body>
     <header>
     <h1>Mike Gilson: Web Development Examples and Resources</h1>
     <nav class="topnav" id="cssmenu">
  <ul>
     <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
     <li><a href="index.html" class="selected"><i class="fa fa-fw fa-home"></i> BIG</a></li>
      <!-- Drop Down menu for Research Pages -->
     <li><a href="#">Web Research</a>
        <ul>
           <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
           <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
           <li><a href="forms.html"><i class="a fa-fw fa-server"></i> Forms</a></li>
        </ul>
     </li>
     <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Gallery</a></li>
      <!-- Drop Down menu for Google Pages -->
     <li><a href="#">Google Tools</a>
        <ul>
           <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
           <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
           <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
        </ul>
     </li>
     <li><a href="contact.php" class="active"><i class="a fa-fw fa-server"></i> Contact Mike</a></li>
  </ul>
    </nav>
     </header>
     
   <main class="wrapper">
       
        <section class="formwidth"> <!-- class="fullwidth" -->
            <h2 class="subheader">Contact Mike</h2>
            <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other 1!       
         *
         */
        //include 'includes/simple.php'; #demonstrates a simple contact form
        include 'includes/multiple.php';#demonstrates multiple form elements

	?>
       <p class="clear-recaptcha"></p>
        </section>
         <aside>
          <h3>Talk to Mike</h3>
            <p class="aside-contact">Use this handy form to contact Mike, ask him questions, offer feedback, or simple say hi.</p>
         </aside>

        
       

     <footer>
      <p><small>&copy; 2019 by <a href="fp-contact.php">Mike Gilson</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
  
     
 </body>
</html>