<!DOCTYPE html> 
<html>
  <head>
	<?php
	$db = mysql_connect("localhost", "root") or die(mysql_error()); ;
	mysql_select_db("Pets", $db) or die(mysql_error()); ;
	?>
    <title>Small Pets World</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords"  content="small pets, about, information" />
    <meta name="description" content="Description of a website about small pets" />
	    <link rel="stylesheet" type="text/css" href="style.css"/>
		    <link rel="stylesheet" type="text/css"
	href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/base/jquery-ui.css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>    
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>  
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
	</script>

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
      <h2 id="pagetitle">Welcome!
      <br />
	<a href="https://twitter.com/share" class="twitter-share-button" id="twitter" data-lang="en">Tweet</a>
	<a href="https://twitter.com/111iamtest" class="twitter-follow-button" id="twitter" data-show-count="false" data-lang="en">Follow @111iamtest</a>
      <br />
      </h2>
		<?php
		
			mysql_query("UPDATE counter SET counter = counter + 1");
			$result = mysql_query("SELECT counter FROM Counter", $db);
			if($row = mysql_fetch_array($result)){
			echo '<p id="counter">Website visits: ' . $row['counter'] . '</p>' . PHP_EOL;
		}
		?>
		<br><br><p>Welcome to our site, Small Pets World! Here you will find important information relating to basic homecare and vetcare for your pet, as well as examples of common illnesses that your pet may contract and some basic information about planning to adopt. </p>
    <br><p>We currently have information for <a href = "guineapig.php">guinea pigs</a>, <a href = "hamster.php">hamsters</a>, <a href = "chinchilla.php">chinchillas</a>, <a href = "ferret.php">ferrets</a>, and <a href = "rabbit.php">rabbits</a>. Please feel free to contact us with any questions you may have concerning the care of your pet! </p><br>
		
		 <ul class="gallery">
			<a href = "guineapig.php">
			<li>
				<img class="selectpet" src="images/guineapig.jpg" alt="Guinea Pig">
			</li>
			</a>
			<a href = "hamster.php">
			<li>
				<img class="selectpet" src="images/hamster.jpg" alt="Hamster">
			</li>
			</a>
			<a href = "chinchilla.php">
			<li>
			   <img class="selectpet"src="images/chinchilla.jpg" alt="Chinchilla">
			</li>
			</a>
			<a href = "ferret.php">
			<li>
			   <img class="selectpet" src="images/ferret.jpg" alt="Ferret">
			</li>
			</a>
			<a href = "rabbit.php">
			<li>
			   <img class="selectpet" src="images/rabbit.jpg" alt="Rabbit">
			</li>
		</ul>
	
    </div>  

    <div id="pushdown"></div>
    </div>
    <div id="footer">
	    <a href="#">About</a> - <a href="questions.php">Contact Us</a> - <a href="#">Terms of Use</a>
	  </div>	
  </body>
</html>