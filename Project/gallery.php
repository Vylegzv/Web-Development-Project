<!DOCTYPE html>

<html>
<head>
	<?php
	$db = mysql_connect("localhost", "root");
	mysql_select_db("Pets", $db);
	?>
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
	</br>
	<?php
	// count how many banners we have
	$query = mysql_query("select * from Banners");
	$total = mysql_num_rows($query);

	// lets create a random number
	$random = (rand()%$total);

	// retrieve the record number corresponding to the generated random number
	$query = mysql_query("SELECT * FROM Banners LIMIT $random, 1");

	while ($row=mysql_fetch_object($query))
	    {
	    echo"<a href='$row->ban_url' target='_blank' title='$row->ban_text'><img class = 'banner' src='$row->ban_image' alt='$row->ban_text'></a>";
	    $ban_view = $row->ban_views + 1;
	    // update the 'times viewed' counter on the banner
	    mysql_query("update Banners set ban_views = $ban_view where ban_id = $row->ban_id");
	    }
	?>
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
        <img src="images/SlidingGallery/img1.jpg" alt="Under Construction" />
        <img src="images/SlidingGallery/img2.jpg" alt="Under Construction" />
        <img src="images/SlidingGallery/img3.jpg" alt="Under Construction" />
        <img src="images/SlidingGallery/img4.jpg" class="start" alt="Under Construction" layout="portrait" />
        <img src="images/SlidingGallery/img5.jpg" alt="Under Construction" layout="portrait"/>
        <img src="images/SlidingGallery/img6.jpg" alt="Under Construction" layout="landscape" />
        <img src="images/SlidingGallery/img7.jpg" alt="Under Construction" />
        <img src="images/SlidingGallery/img8.jpg" alt="Under Construction" layout="portrait" />
        <img src="images/SlidingGallery/img9.jpg" alt="Under Construction" layout="portrait" />
        <img src="images/SlidingGallery/img10.jpg" alt="Under Construction" />
    </div>
    </div>  

    <div id="pushdown"></div>
    </div>
    <div id="footer">
	    <a href="#">About</a> - <a href="questions.php">Contact Us</a> - <a href="#">Terms of Use</a>
	  </div>	
  </body>
</html>