<!DOCTYPE html> 
<html>
  <head>
	<?php
	$db = mysql_connect("localhost", "root");
	mysql_select_db("Pets", $db);
	?>
    <title>Small Pets World: Poll</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords"  content="small pets, information, poll, feedback" />
    <meta name="description" content="Submit your answer to our small pet poll of the month" />
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
        <h2 id="pagetitle">Poll
        <br />
          <a href="https://twitter.com/share" class="twitter-share-button" id="twitter" data-lang="en">Tweet</a>
          <a href="https://twitter.com/111iamtest" class="twitter-follow-button" id="twitter" data-show-count="false" data-lang="en">Follow @111iamtest</a>
        <br />
        </h2>
        
      <br> <p>This is our poll of the month! Please take a second to answer it- your feedback can affect the design of our website, as well as lead to additional information being updated. Thanks!</p>
      <br>
      <div id="poll-container">   
        <form id='poll' action="insertpollcontent.php" method="post" accept-charset="utf-8">  
            <p>What's your favorite small animal?</p>  
            <p><input type="radio" name="poll" value="opt1" id="opt1" /><label for='opt1'>&nbsp;Guinea Pig</label><br /></p>
            <p><input type="radio" name="poll" value="opt2" id="opt2" /><label for='opt2'>&nbsp;Hamster</label><br /></p>
            <p><input type="radio" name="poll" value="opt3" id="opt3" /><label for='opt3'>&nbsp;Chinchilla</label><br /></p> 
            <p><input type="radio" name="poll" value="opt4" id="opt4" /><label for='opt4'>&nbsp;Ferret</label><br /></p>  
            <p><input type="radio" name="poll" value="opt5" id="opt5" /><label for='opt5'>&nbsp;Rabbit</label><br /></p>  
            <p><input type="submit" name="vote" value="Vote" /></p>  
        </form>  
      </div>
    
      <br>
      
      <p>Current Results:</p>
      <?php
        //main query to fetch the data
        $query = mysql_query("SELECT * FROM poll ORDER BY ID DESC");
        $count = 0;
        $optNum = 5;
        $opt[0] = 0; // Guinea Pig
        $opt[1] = 0; // Hamster
        $opt[2] = 0; // Chinchilla
        $opt[3] = 0; // Ferret
        $opt[4] = 0; // Rabbit
        $ans[0] = "GuineaPig";
        $ans[1] = "Hamster";
        $ans[2] = "Chinchilla";
        $ans[3] = "Ferret";
        $ans[4] = "Rabbit";
        //loop through fetched data
        while($row = mysql_fetch_array($query)){
          $count++;
          if ($row['vote'] == "Guinea Pig")
            $opt[0]++;
          else if ($row['vote'] == "Hamster")
            $opt[1]++;
          else if ($row['vote'] == "Chinchilla")
            $opt[2]++;
          else if ($row['vote'] == "Ferret")
            $opt[3]++;
          else if ($row['vote'] == "Rabbit")
            $opt[4]++;
        } 
        
        // output results
        $i = 0;
        while($i < $optNum)
        {
          $percent = round(($opt[$i]/$count)*100);  
          echo '<div class="bar">
                  <div class="percentage" style="width: ' . $percent . '%">' . $ans[$i] . '</div>
                </div> ' . PHP_EOL;
          $i++;
        }
      ?>
      
      </div>  
      
      <br>
      
	    <div id="pushdown"></div>
	    </div>
	    <div id="footer">
		    <a href="#">About</a> - <a href="questions.php">Contact Us</a> - <a href="#">Terms of Use</a>
		  </div>	
	  </body>
	</html>