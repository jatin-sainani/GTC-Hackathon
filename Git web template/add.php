<?php 
if($_POST)
{
$NAME = $_POST['name'];

}
$con=mysqli_connect("localhost","root","","username");
if(!$con)
{
  echo 'not coonnected';
}

if(!mysqli_select_db($con,'username'))
{
  echo 'database not selected';
}

$sql = "INSERT INTO ongoing (name) VALUES ('$NAME')";

if(!mysqli_query($con,$sql))
{
  echo 'not inseted';
}


?>


<?php
if(isset($_POST['name']))
{
  $name=$_POST['name'];
  $domain=$_POST['domain'];
  $desc_short=$_POST['desc_short'];
  $desc_long=$_POST['desc_long'];
  $query="INSERT INTO ongoing(name,domain,desshort,deslarge) VALUES('$name','$domain','$desc_short','$desc_long')";
  $query1="INSERT INTO company(company,domain,desshort,deslarge) VALUES('$name','$domain','$desc_short','$desc_long')";
  $result=mysqli_query($con,$query);
  $result1=mysqli_query($con,$query1);

  if($result)
  {
  
  }
  else
  {
    echo "<span style='color:red'>Failed!</span>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prachal Goyal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
        <link rel="stylesheet" href="css1/main.css">

  <style type="text/css">
    body{
      font-family: 'Rubik', sans-serif;
    }
  </style>
</head>
<body>
    <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
               
               <h2>GetPlaced</h2>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                      <li><a href="index.html">Home</a></li>
                  <li><a href="cp.html">comptitive programming</a></li>
                  <li ><a href="company.php">internships</a></li>
                  
                <li><a href="profile/profile.php">Profile</a></li>
                                      
                  <li  ><a href="ongoing.php">Ongoing Projects</a></li>
<!--                   <li><a href="about.html">Login</a></li>
 -->                  <li><a href="services.html">register</a></li>
              </ul>
              </nav><!-- #nav-menu-container -->            
            </div>
          </div>
        </header><!-- #header -->
        <hr>
        <br>
   <div class="container">
  <h2>Add project now</h2>
  <br>
  <form class="form-horizontal" action="add.php" method="POST">
   <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="name">
    </div>
   <div class="form-group">
      <label for="usr">Domain:</label>
      <input type="text" class="form-control" id="usr" name="domain">
    </div>
    <div class="form-group">
      <label for="usr">Description short:</label>
      <input type="text" class="form-control" name="desc_short" id="usr">
    </div>
   <div class="form-group">
      <label for="usr">Description long:</label>
      <input type="text" class="form-control" name="desc_long" id="usr">
    </div>
 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>
         
</body>
</html>
