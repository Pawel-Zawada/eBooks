<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PDO</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

  </head>
  <body>
  <ul>
	<?php
	$user = 'root';
	$pass = 'root';
	try {
	    $dbh = new PDO('mysql:host=localhost;dbname=scotchbox', $user, $pass);
	    foreach($dbh->query('SELECT * from mensen') as $row) {
	    	echo '<li>' . $row['Naam'] . '</li>';
	    	echo '<li>' . $row['Email'] . '</li>';
	    	echo '<li>' . $row['ID'] . '</li>';
	    }
	    $dbh = null;
	} catch (PDOException $e) {
	    print "Error!: " . $e->getMessage() . "<br/>";
	    die();
	}
	?>
  </ul>
  </body>
</html>