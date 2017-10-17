<?php
include("class/users.php");
$email = $_SESSION['email'];
$profile = new users;
$profile->user_profile($email);  
//print_r($profile->data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online quiz user profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  .head-profile{
    background-color: #156184;
    height: 300px;
    
  }
.personal-details{
  margin-left: 5px;
  margin-top: 28px;
  background-color:#53abce;
}
.personal-details h3,h4{
  /*color:#07485a;*/
  color: white;
}
.personal-image img{
  float: right;
  height: 250px;
  width: 250px;
  margin-top: 25px;
}
.quize-logo img{
  height: 250px;
  width: 550px;
  margin-top: 28px;
}
body{
  background-image: url("img/back_image.png");
  background-repeat: no-repeat;
  background-position: bottom;
  background-color:#53abce;
}
.start-exam{
  margin-top: 60px;
}
.btn-primary{
  background-color: #156184;
}
#subject{
  font-size: 15px;
  width: 400px;
  height: 50px;
}
.selectme{
    cursor:pointer;
    display:inline-block;
    position:relative;
    font:normal 11px/22px Arial, Sans-Serif;
    color:black;
    border:1px solid #ccc;

}
.footer{
  background-color:#156184;
 height: 50px;

}
.footer h4,h5,a{
  margin-left: 7px;
  padding: 5px;
  color: white;
}
  </style>
</head>
<body>

  <!-- ======================to showing the profile in heading part=============================== -->
  <div class="row">
    <div class="col-sm-12 head-profile">
      
       
      
      <?php
             foreach ($profile->data as $prof) {?>
                 <div class="col-sm-4">
                  <div class="well personal-details">
                    <h3>Welcome : <?php echo $prof['name'];?></h3><hr>
                    <h3>Registraion No : <?php echo $prof['id'];?></h3><hr>
                    <h4>Email :   <?php echo $prof['email'];?></h4> 
                   </div>    
                 </div>
                 <div class="col-sm-6 quize-logo">  
                    <center><img src="img/quize_exam.png" alt=""></center>
                 </div> 
                  <div class="col-sm-2 personal-image">
                    <img class="img-thumbnail"src="img/<?php echo $prof['img']; ?>" >
                  </div>  
                    
                    
                    
          
            <?php } ?>
    </div>
  </div>
  <!-- ======================end of the showing profile part ===================================== -->

  <!-- ==============================to showing the body part of the start exam=================== -->
    <div class="container">
      <div class="col-sm-4"></div>
      <div class="col-sm-4 start-exam">

      <center><button class="btn btn-primary btn-lg" type="button" data-toggle="tab" href="#select">Start Quiz</button><br><br><br></center>
      
      
        <div class="tab-pane fade" id="select" >
        <form action="qus_show.php" method="post">  
            <select class="form-control" id="subject" name="cat">
            <option class="selectme">Select Category</option>  
              <?php
              $profile->cat_shows();
              foreach ($profile->cat as $category) { ?>      
              
              <option class="selectme" value="<?php echo $category['id']; ?>"><?php echo $category['cat_name']; ?></option>
              

              <?php } ?>
            </select><br>
            <center><input type="submit" value="Submit" class="btn btn-primary btn-lg"></center><br>
        </form>  
      </div>
      

      </div>
      <div class="col-sm-4"></div>
    </div>
  <!-- ==============================closing the body part of the start exam ======================-->
  <!-- ======================footer and the copy part of the site ============================== -->
  <div class="row">
    <div class="footer">
      <marquee behavior="alternate"><h5>&copy; Copyright : 2017 (Pondicherry University)&nbsp;&nbsp;|&nbsp;&nbsp;Contact informaion :<a href="anandwishvanath@gmail.com">anandwishvanath@gmail.com</a> & &nbsp; Mobile No : 8903526657 </h5></marquee>
     
    </div>

  </div>
  <!-- ========================end of the footer part======================================== -->

</body>
</html>
