<?php 
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	/* Connect To Database*/
	$link = mysql_connect("localhost","root","") or die("Couldn't make connection.");
	$db = mysql_select_db("Pets", $link) or die("Couldn't select database");
	
  /*
	include 'pagination.php'; //include pagination file
	
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = 2; //how much records you want to show
	$adjacents  = 2; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
  
	*/
	//Count the total number of row in the table*/
  /*
	$count_query   = mysql_query("SELECT COUNT(*) AS numrows FROM smallpets WHERE type = 'Rabbit'");
	$row     = mysql_fetch_array($count_query);
	$numrows = $row['numrows'];
	$total_pages = ceil($numrows/$per_page);
	$reload = 'rabbit.php';
	*/
  
  //main query to fetch the data
    $query = mysql_query("SELECT * FROM usercontent ORDER BY ID DESC");

    //loop through fetched data
  while($row = mysql_fetch_array($query)){
    if ($row['Answered'] == 1){ // Only post questions that have been answered
      echo '         <br><h3 class = "space subtitle">' . $row['Subject'] . '</h3>' . PHP_EOL;
      echo '         <h2 class = "space subtitle2">' . $row['Name'] . '</h2>' . PHP_EOL;
      echo '         <br><p class="noindent">' . $row['Question'] . '</p>' . PHP_EOL;
      echo '         <br><p class="noindent">' . $row['Answer'] . '</p>' . PHP_EOL;
    }
  }
//echo '<br>' . paginate($reload, $page, $total_pages, $adjacents);
  } else{
//echo '<br>' . paginate($reload, $page, $total_pages, $adjacents);
?>


<!DOCTYPE html> 
<html>
  <head>
	<?php
	$db = mysql_connect("localhost", "root");
	mysql_select_db("Pets", $db);
	?>
    <title>Small Pets World: Questions</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords"  content="small pets, information, questions, how to" />
    <meta name="description" content="Submit questions related to care of small pets" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
		    <link rel="stylesheet" type="text/css"
	href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/base/jquery-ui.css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>    
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>  
	<script type="text/javascript">	
	
	$(document).ready(function(){
		load(1);
	});

	function load(page){
		$("#loader").fadeIn('slow');
		$.ajax({
			url:'questions.php?action=ajax&page='+page,
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").fadeOut('slow');
			}
		})
	}
	
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
        <li><a href="guineapig.php">Guinea Pigs</a></li>
		<li><a href="hamster.php">Hamsters</a></li>
		<li><a href="chinchilla.php">Chinchillas</a></li>
		<li><a href="ferret.php">Ferrets</a></li>
        <li><a href="rabbit.php">Rabbits</a></li>
		<li><a href="gallery.php">Gallery</a></li>
		<li><a href="questions.php">Questions?</a></li>
	    </ul>
    </div>		


    <div id="content"> 
      <h2 id="pagetitle">Questions
      <br />
	<a href="https://twitter.com/share" class="twitter-share-button" id="twitter" data-lang="en">Tweet</a>
	<a href="https://twitter.com/111iamtest" class="twitter-follow-button" id="twitter" data-show-count="false" data-lang="en">Follow @111iamtest</a>
      <br />
      </h2>

      <br><br><p>Have questions about your pet? Want more information about adopting? Send us your questions below! We'll post our favorite questions with answers at the bottom of this page. Thanks! </p>
      
      <br>
      <form action="insertusercontent.php" method="post">
        <br><p class="noindent">
          <label for='name'>Enter your name (First Last): </label><br>
          <input type="text" name="name" maxlength="100" />
        </p>
        <p class="noindent">
          <label for='subject'>Subject: </label><br>
          <input type="text" name="subject" maxlength="100" />
        </p>
        <p class="noindent">
          <label for='question'>Type your question: </label><br>
          <textarea rows="7" cols = "30" name="question" maxlength="2000"  wrap="physical"></textarea>
        </p>
        <input type="submit" name="submit" value="Submit" />
      </form>
    </div>
  
		<div id="loader"><img src="loader.gif"></div>		
		<div class="outer_div"></div>
    <br><br>
    
	    <div id="pushdown"></div>
	    </div>
	    <div id="footer">
		    <a href="#">About</a> - <a href="#">Contact Us</a> - <a href="#">Terms of Use</a>
		  </div>	
	  </body>
	</html>
	<?php }?>