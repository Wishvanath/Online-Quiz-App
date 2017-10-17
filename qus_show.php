<?php
	include("class/users.php");
	$qus = new users;  
	$cat = $_POST['cat'];
	$qus->qus_show($cat);
	$_SESSION['cat']=$cat;
	// echo "<pre>";
	// print_r($qus->qus);
	

?>

<!--  to showing the content of the question paper in the form of table -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>online question </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			window.onload = function() {
			// Onload event of Javascript
			// Initializing timer variable
			var x = 20;
			var y = document.getElementById("timer");
			// Display count down for 20s
			setInterval(function() {
			if (x <= 21 && x >= 1) {
			x--;
			y.innerHTML = '' + x + '';
			if (x == 1) {
			x = 21;
			}
			}
			}, 1000);
			// Form Submitting after 20s
			var auto_refresh = setInterval(function() {
			submitform();
			}, 20000);

			function submitform() {
			alert('Exam is Over ! click ok to see your Marks.');
			document.getElementById("form").submit();
			}
		}
		</script>
		<style type="text/css">
			.question-body{
				border: 2px solid #073a45;
				background-color: #f0f9fb;
				margin-bottom: 10px;
				padding-bottom: 20px;
			}
			body{
				background-color: #4b6c75;
			}
			.question-body h2{
				color: #036175;
			}
			.question{
				background-color: #26a3bf;
			}
			.btn-primary{
				background-color: #26a3bf;
				float: right;
			}

		</style>

</head>
<body>

<div class="container question-body">
  <h2>Online MCQ Quiz
  	<div class="timer" style="float:right;" >
  		<span>Time out : <b id="timer">20</b> <b>seconds</b>.</span>
  	</div>

  </h2>
  <hr>
  <form method="POST" id="form" name="theform"action="answer.php">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
  <?php 
  $i=1;
  		foreach ($qus->qus as $qust) { ?>
  	          
		  <table class="table table-bordered"> 
		    <thead>
		      <tr>
		        <th class="question"><?php echo $i; ?>&nbsp;<?php echo $qust['question'];?></th>
		        
		      </tr>
		    </thead>  
		    <tbody>
		      <?php if(isset($qust['ans1'])) { ?>	
		      <tr>
		        <td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>"> &nbsp;<?php echo $qust['ans1'];?></td>
		      </tr>
		      <?php } ?>
		      <?php if(isset($qust['ans2'])) { ?>
		      <tr>
		        <td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['id']; ?>"> &nbsp;<?php echo $qust['ans2'];?></td>
		      </tr>
		      <?php } ?>
		      <?php if(isset($qust['ans3'])) { ?>
		      <tr>
		        <td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>"> &nbsp;<?php echo $qust['ans4'];?></td>
		      </tr>
		      <?php } ?>
		      <?php if(isset($qust['ans4'])) { ?>
		      <tr>
		        <td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['id']; ?>"> &nbsp;<?php echo $qust['ans4'];?></td>
		      </tr>
		      <?php } ?>
		      <tr>
		        <td><input type="radio" checked="checked" style="display:none;" value="no_attempt" name="<?php echo $qust['id']; ?>"> </td>
		      </tr>
		      <tr>
		      </tr>	

		    </tbody>
		  </table>
	<?php $i++;} ?>	  
	<input type="Submit" value="Submit Quiz" class="btn btn-primary">
  </div>
  <div class="col-sm-1"></div>	
 </form> 
</div>

</body>
</html>
