<?php
  
	if($_POST['vote'] == "Vote") 
    {
    $errorMessage = "";
    if(empty($_POST['poll'])){
      $errorMessage = "Please enter a vote!";
        die($errorMessage);
    } else {
      switch($_POST['poll']) {
          case "opt1":
              $value = "Guinea Pig";
              break;
          case "opt2":
              $value = "Hamster";
              break;
          case "opt3":
              $value = "Chinchilla";
              break;
          case "opt4":
              $value = "Ferret";
              break;
          case "opt5":
              $value = "Rabbit";
              break;
          default:
              $value = NULL;
      }
      
      if($value == NULL) // should not occur
          {
        $errorMessage = "Please enter a vote!";
          die($errorMessage);
      }

      if(empty($errorMessage)) // should always be empty
        {
        $db = mysql_connect("localhost","root", "");
        if(!$db) die("Error connecting to MySQL database.");
        mysql_select_db("Pets" ,$db);

        $sql = "INSERT INTO poll (vote) VALUES (" .

        PrepSQL($value) . ")";
        
        mysql_query($sql) or die("Trouble inserting into database");
        
        mysql_close($db);
        
        header("Location: poll.php");
      } 
    }
	}
            
    // use stripslashes and mysql_real_escape_string PHP functions
    // to sanitize a string for use in SQL query and
    // put single quotes around the string
    function PrepSQL($value)
    {
		
        if(get_magic_quotes_gpc()) 
        {
            $value = stripslashes($value);
        }

        $value = "'" . mysql_real_escape_string($value) . "'";

        return($value);
    }
?>