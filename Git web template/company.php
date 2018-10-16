
<!DOCTYPE html>
<html lang="en">
<head>
  <title>internship | freelancing</title>
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
                  <li class="menu-active"><a href="company.php">internships</a></li>
                  
                <li><a href="profile/profile.php">Profile</a></li>
                                      
                  <li  ><a href="ongoing.php">Ongoing Projects</a></li>
<!--                   <li><a href="about.html">Login</a></li>
 -->                  <li><a href="services.html">register</a></li>
                   
              </ul>
              </nav><!-- #nav-menu-container -->            
            </div>
          </div>
        </header><!-- #header -->
        <br>
        <br>
<div class="container">
 <center> <h1>Currently Ongoing Internship opportunity</h1> </center>
  <br>
  <!-- INSERT PHP -->
  <?php
$con=mysqli_connect("localhost","root","","username");
$query="Select * from companymain";
$result = mysqli_query($con,$query);
echo "<table class='table table-striped' >
  <thead>
<tr>
<th>Project name</th>
<th>Domain</th>
<th>Description</th>

</tr>
</thead>";

while($row = mysqli_fetch_array($result))
{

  $domain=$row['domain'];

  $query2="SELECT * from company";
  $result2=mysqli_query($con,$query2);
  $rows2=mysqli_fetch_array($result2);
  if($rows2>0){
echo "<tr>";
echo "<td>" . $row['company'] . "</td>";
echo "<td>" . $row['domain'] . "</td>";
echo "<td>" . $row['desshort'] . "</td>";
echo "<td>";
     }
}
exit();
?>
  <!-- php end -->
<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>
    Interested
  </button>

  <!-- The Modal -->
  <div class='modal' id='myModal'>
    <div class='modal-dialog'>
      <div class='modal-content'>
      
        <!-- Modal Header -->
        <div class='modal-header'>
          <h4 class='modal-title'>Project Description</h4>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>
        
        <!-- Modal body -->
      
        
        <!-- Modal footer -->
        <div class='modal-footer'>
          <div>
          <center> <button type='button' class='btn btn-primary' >
          Apply Now
          </button></center>
        </div>
          <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
        </div>
        
      </div>
    </div>
  </div>
   </td>
   
<!--   <p>The .table-striped class adds zebra-stripes to a table:</p>            
 -->  <table class="table table-striped">
    <thead>
      <tr>
        <th>company/start-up's</th>
        <th>Project Name</th>
        <th>Domain</th>
        <th>Description</th>
        <th>Collab</th>
      </tr>
    </thead>
    <tbody>
      <tr>
         <td>Microsoft</td>
        <td>Smart Energy optimization system</td>
        <td>Interenet of Things</td>
        <td>cghchc@example.com</td>
       <td><!-- <button type="button" class="btn btn-primary">Interested</button> -->
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Interested
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Project Description</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          The project is based on INternet of things and Machine Learning, we used bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                    The project is based on INternet of things and Machine Learning, we used bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla

        </div>
        
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <div>
          <center> <button type="button" class="btn btn-primary" >
          Apply Now
          </button></center>
        </div>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div></td>
      </tr>
      <tr>
         <td>Smart Energy optimization system</td>
        <td>..</td>
        <td>ML</td>
        <td>mary@example.com</td>
        <td><button type="button" class="btn btn-primary">Interested</button></td>
      </tr>
      <tr>
         <td>Smart Energy optimization system</td>
        <td>s..</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td><button type="button" class="btn btn-primary">Interested</button></td>
      </tr>
      <tr>
         <td>Smart Energy optimization system</td>
        <td>..</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td><button type="button" class="btn btn-primary">Interested</button></td>
      </tr>
      <tr>
         <td>Smart Energy optimization system</td>
        <td>Smart Energy optimization system</td>
        <td>Interenet of Things</td>
        <td>john@example.com</td>
        <td><button type="button" class="btn btn-primary">Interested</button></td>
      </tr>
      <tr>
         <td>Smart Energy optimization system</td>
        <td>..</td>
        <td>ML</td>
        <td>mary@example.com</td>
        <td><button type="button" class="btn btn-primary">Interested</button></td>
      </tr>
      <tr>
         <td>Smart Energy optimization system</td>
        <td>...</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td><button type="button" class="btn btn-primary">Interested</button></td>
      </tr>
      <tr>
         <td>Smart Energy optimization system</td>
        <td>...</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td><button type="button" class="btn btn-primary">Interested</button></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
