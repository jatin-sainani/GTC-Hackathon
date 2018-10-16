<?php 
 $var1=$_POST["apply"];

 var_dump(isset($var1));
 if(isset())
 {

 }



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ongoing Projects</title>
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
               <!--  <a href="index.html"><img src="logo2.png" alt="" title="" /></a> -->
               <a href = "index.php"><h2>GetPlaced</h2></a>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
               <li><a href="index.html">Home</a></li>
                  <li><a href="cp.html">comptitive programming</a></li>
                  <li><a href="company.php">internships</a></li>
                  
                <li><a href="profile/profile.php">Profile</a></li>
                                      
                  <li><a href="ongoing.php">Ongoing Projects</a></li>
<!--                   <li><a href="about.html">Login</a></li>
 -->                  <li><a href="services.html">register</a></li>
                   
              </ul>               </nav><!-- #nav-menu-container --> </div>
</div>         </header><!-- #header -->      
   <br> <br>
    <div class="container"> 
     <center> <h1>Currently Ongoing Projects in Your
University</h1>
 </center>  <br>  <hr>  
  <h3>Got an Project Idea!</h3>   <br>
<a href="add.php"> <button type='button' class='btn btn-primary'> Start Now</button></a>  
 <hr>   <br>  
  <?php
$con=mysqli_connect("localhost","root","","username"); 
$query="Select * from ongoing"; $result = mysqli_query($con,$query); 
echo "<table class='table table-striped' >  
 <thead>
  <tr> 
    <th>Project name</th>
     <th>Domain</th>
<th>Description</th>
 <th></th>
  <th></th> 
</tr>
 </thead>";
  $x=0; while($row =mysqli_fetch_array($result)) { 
 echo "<tr>"; echo "<td id='".$x."'>" . $row['domain'] . "</td>";
 echo "<td id='".$x."' name='name".$x."'>" . $row['name'] . "</td>";
  echo "<td id='".$x."'>" . $row['desshort']
. "</td>"; echo "<td>
 <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal".$x."'>     Interested   </button>

  <!-- The Modal -->
  <div class='modal' id='myModal".$x."'>
    <div class='modal-dialog'>
      <div class='modal-content'>
      
        <!-- Modal Header -->
        <div class='modal-header'>
          <h4 class='modal-title'>Project Description</h4>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class='modal-body'>"
         .$row['deslarge'].
       "</div>
        
        <div class='modal-footer'>
          <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
        </div>
        
      </div>
    </div>
  </div>
   </td>";
   echo " 
    <form action='#' method='POST'>
      <td>
         <button type='submit' class='btn btn-danger' name='apply' id='".$x."'>Apply now</button>
      </td>
    </form>

   ";
echo "</tr>"; $x++;
}
echo "</table>";

mysqli_close($con);
?>
<!--   <p>The .table-striped class adds zebra-stripes to a table:</p>            
 --> 
</div>

</body>
</html>
