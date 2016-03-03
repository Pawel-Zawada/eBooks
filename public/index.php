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
  	<div class="container">
  	<br>
  	<div class="col-md-4"></div>
  	<div class="col-md-4">
		<form action="calc.php" method="POST">
			<fieldset class="form-group">
				<div class="form-group">
					<label for="years">Amount in &euro;</label>
					<div class="input-group">
					<div class="input-group-addon">&euro;</div>
					<input type="text" class="form-control" id="startSum" placeholder="Amount" name="startSum">
					</div>
				</div>
			</fieldset>
		    <fieldset class="form-group">
			    <label for="years">Interest rate in %</label>
			    <div class="input-group">
			    <div class="input-group-addon">%</div>
			    <select class="form-control c-select" name="percentage">
			      <option>1</option>
			      <option>2</option>
			      <option>3</option>
			      <option>4</option>
			      <option>5</option>
			      <option>6</option>
			      <option>7</option>
			      <option>8</option>
			      <option>9</option>
			      <option>10</option>
			      <option>11</option>
			      <option>12</option>
			      <option>13</option>
			      <option>14</option>
			      <option>15</option>
			      <option>16</option>
			      <option>17</option>
			      <option>18</option>
			      <option>19</option>
			      <option>20</option>
			    </select>
			    </div>
  			</fieldset>
  			<fieldset class="form-group">
			    <label for="years">Amount of years</label>
			    <input type="number" min="1" class="form-control" placeholder="Amount of years" name="years">
  			</fieldset>
  			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<div class="col-md-4"></div>
    </div>
  </body>
</html>