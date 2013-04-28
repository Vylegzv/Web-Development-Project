<?php
	if($_POST['submit'] == "Submit") 
    {

		$errorMessage = "";
		
		if(empty($_POST['name'])) 
        {
			$errorMessage = "Please Enter your name!";
			die($errorMessage);
		}
		if(empty($_POST['subject'])) 
        {
	        $errorMessage = "Please Enter the subject!";
			die($errorMessage);
		}
		if(empty($_POST['question'])) 
        {
			$errorMessage ="Please Enter your message!";
			die($errorMessage);
		}

    $varName = $_POST['name'];
		$varSubject = $_POST['subject'];
		$varQuestion = $_POST['question'];
		
	    preg_match("/^[A-Z][a-zA-Z']+[ ]+[A-Z][a-zA-Z'\- ]*$/", $varName) or
			    die("Please enter a valid name.");

		if(empty($errorMessage)) 
        {
	
			$db = mysql_connect("localhost","root", "");
			if(!$db) die("Error connecting to MySQL database.");
			mysql_select_db("Pets" ,$db);

      $answer = NULL;
      $answered = 0;
			$sql = "INSERT INTO usercontent (Name, Subject, Question, Answer, Answered) VALUES (".

			PrepSQL($varName) . ", " .
			PrepSQL($varSubject) . ", " .
			PrepSQL($varQuestion) . ", " .
      PrepSQL($answer) . ", " . 
      PrepSQL($answered) . ")";
      
			mysql_query($sql) or die("Trouble inserting into database");
			
			mysql_close($db);
			
			header("Location: questions.php");
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