<?php include('server.php') ?>
<?php
$db = mysqli_connect('localhost', 'root', '', 'database2');
$userid = mysqli_real_escape_string($db, $_POST['userid']);
$name="";
$email="";
$address="";
$phone="";
$branch="";
$religion="";
$catrank="";
$year="";
echo $userid;
$user_check_query = "SELECT * FROM studentinfo WHERE admissionNo='$userid'";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
$name=$user['name'];
$year=$user['yearadmission'];
$religion=$user['religion'] ;
$email=$user['email'] ;
$address=$user['address'] ;
$phone=$user['phone'] ;
$branch=$user['branch'] ;
$catrank=$user['catrank'];
$sem1=$user['Sem1'];
$sem2=$user['Sem2'];
$sem3=$user['Sem3'];
$sem4=$user['Sem4'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile of Student</title>
  <link rel="stylesheet" type="text/css" href="1.css">
  <link rel="shortcut icon" type="image/png" href="head_logo.jpeg">
  <link rel="stylesheet" type="text/css" href="stl.css">
  <style>
body {
  background-image: url('c21.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
a:link, a:visited {
  color:  #007399;
  text-decoration: none;
}


</style>
</head>
<body>
  <div class="list-unstyled3" >
          <ul>
            <center>
            <li><a href="vit.php"><img src="logo.jpg" alt="CUSAT Kochi"  class="logo2" height="300"  align="center"/></a></li>
            </center>
            <div class="para">
            
                </div>  
                   </ul>
          
        </div>
        <br>
        

  <div class="header">
    <h2>Student Profile</h2>
  </div>
<center>
    <style>
        body{
            background-image: url("c6.jpg") ;
        }
    </style>

  <div style="border-radius:60px; ">
<?php 
    
    $db1 = mysqli_connect('localhost', 'root', '', 'database2');
    $user_check_query = "SELECT * FROM studentinfo WHERE admissionNo='$userid' ";
    $result = mysqli_query($db1, $user_check_query);
    $user = mysqli_fetch_assoc($result);
   
  

?>
    
  <br>
  <p style="padding-right:40px;"><b>Student Name :</b> <?php echo $name; ?></p>
  <br>
  <p style="padding-right:40px;"><b>Student Id :</b> <?php echo $userid; ?></p>
  <br>
  <p style="padding-right:40px;"><b>Branch :</b> <?php echo $branch; ?></p>
  <br>
  <p style="padding-right:40px;"><b>CAT RANK :</b> <?php echo $catrank; ?></p>
  <br>
  <p style="padding-right:40px;"><b>Religion :</b> <?php echo $religion; ?></p>
  <br>
  <p style="padding-right:40px;"><b>Email:</b> <?php echo $email; ?></p>
  <br>
  <p style="padding-right:40px;"><b>Phone:</b> <?php echo $phone; ?></p>
  <br>
  <p style="padding-right:40px;"><b>Address :</b> <?php echo $address; ?></p>
 <br>
 <p style="padding-right:40px;"><b>Sem1 :</b> <?php echo $sem1; ?></p>
 <br>
 <p style="padding-right:40px;"><b>Sem2 :</b> <?php echo $sem2; ?></p>
 <br>
 <p style="padding-right:40px;"><b>Sem3 :</b> <?php echo $sem3; ?></p>
 <br>
 <p style="padding-right:40px;"><b>Sem4 :</b> <?php echo $sem4; ?></p>
 <br>
 <br>
 
</div>
</center>
</body>
</html>
<?php
 //header("Location: logout.php");

?>