<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>online quiz </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .footer{
        background-color:#156184;
        height: 50px;

      }
      .footer h4,h5,a{
        margin-left: 7px;
        padding: 5px;
        color: white;
      }
      .head h1{
        
        color: white;
        padding: 10px;
      }
      .head{
        background-color: #156184;
        height: 100px;
        margin-bottom: 15px;

      }
    </style>
    </head>
    <body>
<div class="row head">
  <div class="col-sm-4"></div>
  <div class="col-sm-4"><marquee direction="right" behavior="alternate" ><h1>Start Your Exam </h1></marquee></div>
  <div class="col-sm-4"></div>
            
</div>
<div class="container">
<!-- ===================for login form============================= -->

  <div class="col-sm-6">
    <div class="panel panel-primary">
        <div class="panel-heading">Login Form</div>
        <div class="panel-body">
          <?php
            if(isset($_GET['run']) && $_GET['run']=="failed"){
              echo "your email and password does not matched please try again !";
            }



          ?>
            <form role="form" action="signin_sub.php" method="post">
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="e">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="p">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>



        </div>
    </div>
  </div>





<!-- =====================for signup form========================== -->

  <div class="col-sm-6">
    <div class="panel panel-primary">
        <div class="panel-heading">Signup form</div>
        <div class="panel-body">
          <?php 
            if(isset($_GET['run']) && $_GET['run'] == "success")
            {
              echo "<mark>you have successfully registered </mark>";
            }

          ?>
            <form action="signup_sub.php" method="Post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="Name">Name:</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="n">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="Email" class="form-control" id="email" placeholder="Enter Email" name="e">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="p">
                    </div>
                    <div class="form-group">
                      <label for="image">Upload your image </label>
                      <input type="file" name="img">
                    </div><br><br>
                    <button type="submit" class="btn btn-primary">Submit</button>

            </form>


        </div>
    </div>
  </div>

</div>
<!-- end of the container class -->

<!-- ======================footer and the copy part of the site ============================== -->
  <div class="row">
    <div class="footer">
      <marquee behavior="alternate"><h5>&copy; Copyright : 2017 (Pondicherry University)&nbsp;&nbsp;|&nbsp;&nbsp;Contact informaion :<a href="anandwishvanath@gmail.com">anandwishvanath@gmail.com</a> & &nbsp; Mobile No : 8903526657 </h5></marquee>
     
    </div>

  </div>
  <!-- ========================end of the footer part======================================== -->



 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
