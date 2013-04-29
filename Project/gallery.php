<!DOCTYPE html>

<html>
<head>
    <title>Small Pets World: Gallery</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords"  content="small pets, gallery, pictures" />
    <meta name="description" content="Pet image gallery" />
	    <link rel="stylesheet" type="text/css" href="style.css"/>
		    <link rel="stylesheet" type="text/css"
	href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/base/jquery-ui.css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>    
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="jquery.slidingGallery-1.2.min.js"></script>
    <script type="text/javascript">
	!function(d,s,id){
		var js,fjs=d.getElementsByTagName(s)[0];
		if(!d.getElementById(id)){js=d.createElement(s);
			js.id=id;js.src="https://platform.twitter.com/widgets.js";
			fjs.parentNode.insertBefore(js,fjs);
			}
		}
		(document,"script","twitter-wjs");

		!function(d,s,id){
			var js,fjs=d.getElementsByTagName(s)[0];
			if(!d.getElementById(id)){js=d.createElement(s);
				js.id=id;
				js.src="//platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);
				}
			}
			(document,"script","twitter-wjs");

        $(function() {
            $('div.gallery1 img').slidingGallery({ useCaptions: true, container: $('div.gallery1') });
        });
    </script>
    <style type="text/css">
        div.gallery img 
        {
        	border: solid 1px white;
        }
    </style>
</head>
<body>
	
	<div id="container">
    <div id="header">
	  <h1><span></span></h1>
 	  <h1>Small Pets World</h1>
    </div>

	  <div id="navigationh">
	    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="poll.php">Poll</a></li>
        <li><a href="questions.php">Questions?</a></li>
	    </ul>
    </div>	

    <div id="navigationv">
	    <ul>
        <li><a href="guineapig.php">Guinea Pigs</a></li>
        <li><a href="hamster.php">Hamsters</a></li>
        <li><a href="chinchilla.php">Chinchillas</a></li>
        <li><a href="ferret.php">Ferrets</a></li>
        <li><a href="rabbit.php">Rabbits</a></li>
	    </ul>
    </div>


    <div id="content"> 
      <h2 id="pagetitle">Gallery
      <br />
	<a href="https://twitter.com/share" class="twitter-share-button" id="twitter" data-lang="en">Tweet</a>
	<a href="https://twitter.com/111iamtest" class="twitter-follow-button" id="twitter" data-show-count="false" data-lang="en">Follow @111iamtest</a>
      <br />
      </h2>
    <br />
    <div class="gallery1">
        <img src="images/SlidingGallery/img1.jpg" caption="A papercraft AT-AT that I made" />
        <img src="images/SlidingGallery/img2.jpg" caption="My dog when she was a wee puppy" />
        <img src="images/SlidingGallery/img3.jpg" caption="A bit of Photoshop fun" />
        <img src="images/SlidingGallery/img4.jpg" class="start" caption="A woodburning of mine, inspired by Dark Tower series by Stephen King" layout="portrait" />
        <img src="images/SlidingGallery/img5.jpg" caption="Another woodburning of mine, inspired by Dark Tower series by Stephen King" layout="portrait" />
        <img src="images/SlidingGallery/img6.jpg" caption="Some lights in the lobby of the Rio in Vegas" layout="landscape" />
        <img src="images/SlidingGallery/img7.jpg" caption="A baby lion at the MGM Grand" />
        <img src="images/SlidingGallery/img8.jpg" caption="Me dressed up as the Punisher for halloween + a bit of photoshop" layout="portrait" />
        <img src="images/SlidingGallery/img9.jpg" caption="A cake I made for my friend Matt" layout="portrait" />
        <img src="images/SlidingGallery/img10.jpg" caption="A stained glass roof in Caesar's Palace" />
    </div>
    </div>  

    <div id="pushdown"></div>
    </div>
    <div id="footer">
	    <a href="#">About</a> - <a href="questions.php">Contact Us</a> - <a href="#">Terms of Use</a>
	  </div>	
  </body>
</html>