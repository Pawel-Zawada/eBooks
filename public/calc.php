<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Calculator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

  </head>
  <body>
	<?php
		$years = $_POST['years'];
		$startSum = $_POST['startSum'];
		$calcsum = $startSum;
		$percentage = $_POST['percentage'];
		$percentageFactor = ($percentage / 100) + 1 ;
    	?>
	<div class="container">
	<br>
	<div class="col-md-4"></div>
	<div class="col-md-4">
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>Years</th>
            <th>Starting sum</th>
            <th>Interest percentage</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $years ?></td>
            <td><?php echo $startSum ?></td>
            <td><?php echo $percentage ?></td>
          </tr>
        </tbody>
      </table>
      <ul class="list-group">
        <?php for($x = 1; $x <= $years; $x++) {
        	$calcsum = $calcsum * $percentageFactor;
        	echo '<li class=' . "list-group-item" . '> Year ' . $x . ': &euro; ' . round($calcsum) . '</li>';
        }
        ?>
      </ul>
    </div>
    <div class="col-md-4"></div>
    </div>
    <br>
  </body>
</html>