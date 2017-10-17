<?php
include("class/users.php");
$ans=new users;
$answer=$ans->answer($_POST);


?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

.panel-primary{
	margin-top: 25px;
}
body{
	background-color:#314c5a;
}
.footer{
        background-color:#008aa7;
        height: 50px;
        border-radius: 25px;

      }
.footer h4,h5,a{
        margin-left: 7px;
        padding: 5px;
        color: white;
      }
.panel-primary > .panel-heading{
	background-color: #008aa7;
}
</style>





</head>
<body>
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<!-- to find the total number of questions and percentage of marks -->
		<?php 
			$total_question = $answer['right']+$answer['wrong']+$answer['no_answer'];
			$percentage = ($answer['right']*100)/$total_question;
			$total_attempt = $total_question-$answer['no_answer'];
		?>
		<div class="panel panel-primary" id="score-card">
			<div class="panel-heading">
				<center><h4><u>Your Score Card </u></h4></center>
			</div>	
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>Total Number of Questions</th>
						<th><?php echo $total_question; ?></th>

					</thead>
					<tbody>
						<tr>
						<td>Attempt Question </td>
						<td><?php echo$total_attempt; ?></td>
						</tr>
						<tr>
						<td>Right Answer </td>
						<td><?php echo $answer['right']; ?></td>
						</tr>
						<tr>
						<td>Wrong Answer </td>
						<td><?php echo $answer['wrong']; ?></td>
						</tr>
						<tr>
						<td>No Attempt</td>
						<td><?php echo $answer['no_answer']; ?></td>
						</tr>
						<tr>
							<td>Final Score </td>
							<td><?php echo $percentage . "%"; ?></td>
						</tr>
					</tbody>


				</table>
				<button class="btn btn-primary" type="button" data-toggle="tab" href="#select">Feedback</button>
				<div class="tab-pane fade" id="select">
					<form>
					    <div class="form-group">
					      <label for="comment">Comment:</label>
					      <textarea class="form-control" rows="5" id="comment"></textarea>
					    </div>

 					 </form>
 					 
					    <div class="footer">
					      <marquee ><h5>&copy; Copyright : 2017 (Pondicherry University)&nbsp;&nbsp;|&nbsp;&nbsp;Contact informaion :<a href="anandwishvanath@gmail.com">anandwishvanath@gmail.com</a> & &nbsp; Mobile No : 8903526657 </h5></marquee>
					     
					    </div>

  
				</div>	
			</div>
		</div>

	<div class="col-sm-2"></div>
</body>
</html>
