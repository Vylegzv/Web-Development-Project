<!DOCTYPE html> 
<html>
  <head>
	<?php
	$db = mysql_connect("localhost", "root");
	mysql_select_db("Pets", $db);
	?>
    <title>Small Pets World: Chinchilla</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords"  content="small pets, chinchilla, care guide, how to" />
    <meta name="description" content="A pet owner's guide to chinchillas" />
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
      <h2 id="pagetitle">Chinchillas
      <br />
	<a href="https://twitter.com/share" class="twitter-share-button" id="twitter" data-lang="en">Tweet</a>
	<a href="https://twitter.com/111iamtest" class="twitter-follow-button" id="twitter" data-show-count="false" data-lang="en">Follow @111iamtest</a>
      <br />
      </h2>
	<?php
		$result = mysql_query("SELECT * FROM smallpets WHERE Type = 'Chinchilla'", $db);
    //loop through fetched data

		while($row = mysql_fetch_array($result)){
		
      echo '          <br><br><img class="petimage" src="' . $row['ImageUrl2'] . '" alt="Under Construction"/>';

		echo '<br><br><p class = "space">' . $row['Info'] . '</p>' . PHP_EOL;
		
			echo '         <br><h3 class = "space subtitle">' . 'Homecare' . '</h3>' . PHP_EOL;
			echo '         <p>' . $row['Homecare'] . '</p>' . PHP_EOL;
	    echo '         <br><h3 class = "space subtitle">' . 'Vetcare' . '</h3>' . PHP_EOL;
			echo '         <p>' . $row['Vetcare'] . '</p>' . PHP_EOL;
	    echo '         <br><h3 class = "space subtitle">' . 'Illnesses' . '</h3>' . PHP_EOL;
			echo '         <p>' . $row['Illnesses'] . '</p>' . PHP_EOL;
	    echo '         <br><h3 class = "space subtitle">' . 'Planning' . '</h3>' . PHP_EOL;
			echo '         <p>' . $row['Planning'] . '</p>' . PHP_EOL;
		}
	?>
	
    </div>

	    <div id="pushdown"></div>
	    </div>
	    <div id="footer">
		    <a href="#">About</a> - <a href="questions.php">Contact Us</a> - <a href="#">Terms of Use</a>
		  </div>	
	  </body>
	</html>