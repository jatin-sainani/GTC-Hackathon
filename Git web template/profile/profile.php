<?php 

$con=mysqli_connect("localhost","root","","username");


if(isset($_POST['skill']))
{
  $skill_user=$_POST['skill'];
  $query="INSERT INTO users (skills) VALUES ('$skill_user')";
  $result=mysqli_query($con,$query);
  if($result)
    echo "<span style='color:green'>Success</span>";
  else
    echo  mysqli_error($con);
}

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Profile Page Template</title>
  <meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="http://demos.creative-tim.com/material-kit-pro/assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="http://demos.creative-tim.com/material-kit-pro/assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>Profile Page</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css'>
      <link rel="stylesheet" href="../css1/main.css">
      <link rel="stylesheet" href="css/style.css">



  
</head>

<body>

  <body class="index-page">
  	 <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
               <!--  <a href="index.html"><img src="logo2.png" alt="" title="" /></a> -->
               <h2>Title here</h2>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                      <li><a href="../index.php">Home</a></li>
                  <li><a href="../cp.html">comptitive programming</a></li>
                  <li ><a href="../company.php">internships</a></li>
                  
                <li><a href="profile/profile.php">Profile</a></li>
                                      
                  <li  ><a href="../ongoing.php">Ongoing Projects</a></li>
<!--                   <li><a href="about.html">Login</a></li>
 -->                  <li><a href="services.html">register</a></li>
                   
              </ul>
              </nav><!-- #nav-menu-container -->            
            </div>
          </div>
        </header><!-- #header -->


<div class="wrapper" style="margin-bottom: 20px;">
	<div class="header header-filter" style="background-image: url('');">
				<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="card card-header">
						<img src="profile.jpg" alt="Circle Image" class="avatar img-circle img-responsive img-raised">
						<a href="#"><button class="badge btn btn-fab btn-fab-mini btn-round btn-blue"><i class="material-icons">person_add</i></button></a>
						<h4>Prachal Goyal</h4>
						<p>Manipal University Jaipur <br>Second year <br>B.tech CCE</p>
						<br>
						<br>
	                    
	                  <!--   <div class="row cardindent">
	                    	<div class="col-xs-4 col-md-4">
	                    		<b>44</b> uploads
	                    	</div>
	                    	<div class="col-xs-4 col-md-4">
	                    		<b>743</b> following
	                    	</div>
	                    	<div class="col-xs-4 col-md-4">
	                    		<b>345</b> followers
	                    	</div>
	                    </div>

	                    <div class="progress progress-line-primary user-rating">
	                    	<div class="progress-bar progress-bar-success" style="width: 65%">
	                            <span class="sr-only">65% Complete (success)</span>
	                        </div>
	                        <div class="progress-bar progress-bar-danger" style="width: 35%">
	                            <span class="sr-only">35% Complete (danger)</span>
	                        </div>
	                    </div> -->
	                    
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">
	            <div class="row">
	            	<div class="col-md-8">
	            		<div class="container">
  <h2>My Ongoing Projects</h2>
  <br>
  <br>
  <?php
$con=mysqli_connect("localhost","root","","username");
$query="Select * from company";
$result = mysqli_query($con,$query);
echo "<table class='table table-striped' >
  <thead>
<tr>
<th>Project name</th>
<th>Domain</th>
<th>Description</th>
</tr>
</thead>";
$x=0;
while($row = mysqli_fetch_array($result))
{ 
echo "<tr>";
echo "<td>" . $row['domain'] . "</td>";
echo "<td>" . $row['company'] . "</td>";
echo "<td>" . $row['desshort'] . "</td>";

echo "</tr>"; $x++;
}
echo "</table>";

mysqli_close($con);
?>
<!--   <p>The .table-striped class adds zebra-stripes to a</p>		 -->            
  <!-- <table class="table table-striped">
    <thead>
      <tr>
        <th>Project</th>
        <th>Domain</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>jhh</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table> -->

</div>

	            	<!-- 	<h2>Posts</h2>
			            <div class="row">
			            	<div class="col-md-3">
			            		<img class="img-rounded img-responsive img-raised" src="https://unsplash.it/400?random&sig=0">
			            		<a href="#"><button class="like btn btn-fab btn-fab-mini btn-round btn-blue"><i class="material-icons">favorite</i></button></a>
			            	</div>
			            	
			            	<div class="col-md-3">
			            		<img class="img-rounded img-responsive img-raised" src="https://unsplash.it/400?random&sig=1">
			            		<a href="#"><button class="like btn btn-fab btn-fab-mini btn-round btn-blue"><i class="material-icons">favorite</i></button></a>
			            	</div>
			            	
			            	<div class="col-md-3">
			            		<img class="img-rounded img-responsive img-raised" src="https://unsplash.it/400?random&sig=2">
			            		<a href="#"><button class="like btn btn-fab btn-fab-mini btn-round btn-blue"><i class="material-icons">favorite</i></button></a>
			            	</div>
			            	
			            	<div class="col-md-3">
			            		<img class="img-rounded img-responsive img-raised" src="https://unsplash.it/400?random&sig=3">
			            		<a href="#"><button class="like btn btn-fab btn-fab-mini btn-round btn-blue"><i class="material-icons">favorite</i></button></a>
			            	</div>
			            </div> -->

                  <div class="row">
                    <div class="col-md-12 col-xs-12">
                      <h2>Reviews</h2>
                      <blockquote>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut facilisis felis at nunc commodo, a porta odio rutrum. Cras consectetur, augue nec cursus vulputate, risus nulla vulputate augue, vitae congue massa urna sit amet neque.
                        </p>
                        <small>
                          Curabitur lacinia, Dapibus
                        </small>
                      </blockquote>
                      
                      <blockquote>
                        <p>
                          Phasellus neque eros, laoreet sit amet enim ut, vestibulum malesuada sapien. Mauris ultrices sodales sapien a venenatis. Ut gravida nulla at mi efficitur, in laoreet sapien pharetra. Nam id purus elementum, cursus nisl ac, vehicula ligula. Vestibulum ac egestas augue.
                        </p>
                        <small>
                          Richard McClintock, Professor
                        </small>
                      </blockquote>
                      
                      <blockquote>
                        <p>
                          Sed id finibus nisi. Integer a ligula mollis, feugiat ante ac, sagittis elit. Nullam aliquet molestie ligula, in commodo elit. Sed cursus bibendum dictum. Proin dignissim vulputate felis, at rutrum purus maximus ornare. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                        </p>
                        <small>
                          Mauris Semper, Rhoncus
                        </small>
                      </blockquote>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-12 col-xs-12">
                      
                    </div>
                  </div>
                    
	            	</div>
	            	<div class="col-md-4">
	            		<br>
	            		<h2>Skills</h2>
	            		<br>

                  <?php
$con=mysqli_connect("localhost","root","","username");
$query="Select * from users";
$result = mysqli_query($con,$query);
echo "<table class='table table-striped' >
  <thead>
<tr>
<th>Skill Domain name</th>
</tr>
</thead>";
$x=0;
while($row = mysqli_fetch_array($result))
{ 
echo "<tr>";
echo "<td>" . $row['skills'] . "</td>";
echo "</tr>"; $x++;
}
echo "</table>";
mysqli_close($con);
?>
  <br>
<form action="profile.php" method="POST">
<!-- 	<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">ADD SKill</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" ></textarea>
</div> -->
 

<select name="skill">
  <option value="Web Development">Web Development</option>
  <option value="App Development">App Development</option>
  <option value="Machine Learning">Machine Learning</option>
  <option value="Internet Of Things">Internet Of Things</option>
  <option value="Designing">Designing</option>
  <option value="Marketing">Marketing</option>
</select>

 <button type='submit' class='btn btn-primary' name="Save">Save</button>

</form>



	     <!--        		<h3>About me</h3> -->
	 
        <!--           <h2>Hire me</h2> -->
                   <!--    <div class="card card-signup">
                        <form class="form" method="" action="">
                          <div class="header btn-blue text-center">
                            <h4>Be social!</h4>
                            <div class="social-line">
                              <a href="#" class="btn btn-simple btn-just-icon">
                                <i class="fa fa-500px"></i>
                              </a>
                              <a href="#" class="btn btn-simple btn-just-icon">
                                <i class="fa fa-twitter"></i>
                              </a>
                              <a href="#" class="btn btn-simple btn-just-icon">
                                <i class="fa fa-linkedin"></i>
                              </a>
                            </div>
                          </div>
                          <p class="text-divider">Send me an email</p>
                          <div class="content">

                            <div class="input-group">
                              <span class="input-group-addon">
                                <i class="material-icons">face</i>
                              </span>
                              <input type="text" class="form-control" placeholder="First Name...">
                            </div>

                            <div class="input-group">
                              <span class="input-group-addon">
                                <i class="material-icons">email</i>
                              </span>
                              <input type="text" class="form-control" placeholder="Email...">
                            </div>

                            <div class="input-group">
                              <span class="input-group-addon">
                                <i class="material-icons">message</i>
                              </span>
                              <textarea placeholder="Message..." class="form-control" rows="3"></textarea>
                            </div>

                          </div>
                          <div class="footer text-center">
                            <a href="#" class="btn btn-simple btn-primary btn-lg text-blue">Send message</a>
                          </div>
                        </form>
                      </div>
                  
								</div>
                   -->
	            	</div>
	        	</div> 
	    	</div>
	    </div>

	</div>
    <footer class="footer">
	    <div class="container">
	       <!--  <nav class="pull-left">
	            <ul>
					<li>
						<a href="https://www.creative-tim.com">
							Creative Tim
						</a>
					</li>
					<li>
						<a href="https://presentation.creative-tim.com">
						   About Us
						</a>
					</li>
					<li>
						<a href="https://blog.creative-tim.com">
						   Blog
						</a>
					</li>
					<li>
						<a href="https://www.creative-tim.com/license">
							Licenses
						</a>
					</li>
	            </ul>
	        </nav> -->
	       <!--  <div class="copyright pull-right">
	            &copy; 2017, made with <i class="material-icons">favorite</i> by Creative Tim for a better web.
	        </div> -->
	    </div>
	</footer>
</div>

<script src="http://demos.creative-tim.com/material-kit/assets/js/nouislider.min.js" type="text/javascript"></script>
</body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='https://cdn.rawgit.com/creativetimofficial/material-kit/master/assets/js/material.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
