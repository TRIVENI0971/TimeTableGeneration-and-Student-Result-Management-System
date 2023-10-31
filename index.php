<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TTGSRMS</title>
    
    <style>
	a{margin-left:15px;text-decoration:none; font-size:20px}
	a:hover{background:#c5de21;color:#c5de21;}
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > 
	img { margin:auto;}
</style>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <script src="js/jquery-2.1.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- [endif]-->

</head>
    <body>
    
      <!-- /.navbar -->
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"><font color="#e327aa">RGUKT Smart Schedule</font></a>
    </div>
    <ul class="nav navbar-nav">
    
      <li class="active"><a href="#">Home</a></li>
      
      <li><a class="page-scroll" href="#about">About</a></li> 
      <li><a class="page-scroll" href="#contact">Contact Us</a></li>
      <!-- <li><a class="page-scroll" href="#registration">Registration</a></li> -->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="../timetable/staff/index.php">Staff Login</a></li>
          <li><a href="../timetable/student/index.php">Student Login</a></li> 
          <li><a href="../srms-master/add_results.php">Student results</a></li> 
        </ul>
      </li> 
    </ul>
  </div>
</nav>

   

<header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Time Table Generation and Student Result Management System</h1>
                <hr>
               
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>



  <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12 text-center">
                        <h2 class="section-heading">About Time Table Generation and Student Result Management System </h2>
                        <hr class="primary">
                    </div>
                    
                  
                    
                    <div class="row mb90">
                        <div class="col-md-12 text-justify">
                        
                                <p>In this Time Table Generation and Student Result Management System it comprises a navigation bar featuring
                                    options such as HOME,ABOUT,CONTACT US, and LOGIN Sessions.Within the login Session,users can access Staff login,Student Login,and student Results
                                    In the Staff Login Session,Faculty members can log in with their credentials to view their personalized timetable,
                                    update their profiles, change their passwords ,and log out.Similarly, in the Student login section, students can access their 
                                    timetables, make edits to their profiles, and log out.The Student Results module allow for the addition of Student Information,
                                    including names,IDs,Classes,subjects and marks with the options to print the results.
                                </p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-">
                            <div class="st-member">
                                
                                </div>
                                </div></div></div></div>
                                
       <!--contact-->
            <br/><br/>
             <section id="contact">
             <div class="row">
             <h2 class="section-heading" align="center">Contact Us</h2>
                        <hr class="primary">
                <div class="col-lg-offset-2 col-lg-8 text-center">
                     <h2 class="section-heading"> Let's Get In Touch</h2>
                        <hr class="primary">
                  
                    </div>                   
            <div class="panel panel-warning bg-primary" style="padding:10px 25px;">
<?php 
include('config.php');
extract($_POST);
if(isset($save))
{
	
	mysqli_query($con,"insert into contactus values('','$name','$e','$s','$m')");
	

	$err="<font color='blue'>Congrats Your Data Saved!!!</font>";
	
}

?>
   <form method="POST">
 <div class="row" style="margin-bottom: 10px;">
 <?php echo @$err; ?>
  </div>       
    <div class="row" style="margin-bottom: 10px;">
        <input type="text" class="form-control" placeholder="Name" name="name"/>
    </div>
    <div class="row" style="margin-bottom: 10px;">
        <input type="email" class="form-control" placeholder="Email" name="e"/>
    </div>
    <div class="row" style="margin-bottom: 10px;">
        <input type="text" class="form-control" placeholder="Subject" name="s"/>
    </div>
    <div class="row" style="margin-bottom: 10px;">
        <textarea class="form-control" placeholder="Message" style="resize: vertical;max-height: 400px;" name="m"></textarea>
    </div>
    <div class="row" style="margin-bottom: 10px;">
        <input type="submit" value="save" name="save" class="btn btn-success" />
    </div>
    </form>
    <div class="row" style="margin-bottom: 10px;">
    </div>
    </div>
    </div>
    
   
<?php 
include('config.php');

extract($_POST);
if(isset($save))
{
$que=mysqli_query($con,"select * from student where eid='$eid' and mob='$mobile'");


	
$row=mysqli_num_rows($que);
	if($row)
	{
	$err="<font color='red'>This user already exists</font>";
	}
	else
	{
	$image=$_FILES['pic']['name'];	
		
       mysqli_query($con,"insert into student               values('','$stname','$eid','$p','$mobile','$address','$courseid','$s','$dob','$image','$gen','$status',now())");	

    mkdir("../student/image/$eid");
     move_uploaded_file($_FILES['pic']['tmp_name'],"../student/image/$eid/".$_FILES['pic']['name']);


	$err="<font color='blue'>Congrats Your Data Saved!!!</font>";
	}
	
}

?>
<script>
function showSemester(str)
{
if (str=="")
{
document.getElementById("txtHint").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}



xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("semester").innerHTML=xmlhttp.responseText;
}
}
//alert(str);
xmlhttp.open("GET","semester_ajax.php?id="+str,true);
xmlhttp.send();
}
</script>

<script>
function showcourse(str)
{
if (str=="")
{
document.getElementById("txtHint").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}



xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("department").innerHTML=xmlhttp.responseText;
}
}
//alert(str);
xmlhttp.open("GET","course_ajax.php?id="+str,true);
xmlhttp.send();
}
</script>






<div class="row">
<div class="col-md-12">

<h2>Add Student</h2>
<form method="POST" enctype="multipart/form-data">
<div class="row" style="margin-bottom: 10px;">
<?php echo @$err; ?>
</div>
	<div class="row" style="margin-bottom: 10px;"> 
	<select name="courseid" class="form-control" onchange="showSemester(this.value)" id="courseid"/>
    <option disabled selected >Select Department</option>
	<?php 
	$dep=mysqli_query($con,"select * from department");
	while($dp=mysqli_fetch_array($dep))
	{
	$dp_id=$dp[0];
	echo "<option value='$dp_id'>".$dp[1]."</option>";
	}
	?>
	
    </select>
	</div>
   
    <div class="row" style="margin-bottom: 10px;">
	<select name="s" id="semester" onchange="showsemester(this.value)" class="form-control"/>
    <option disabled selected >Select Semester</option>
    
    <?php
	$sub=mysqli_query($con,"select * from semester");
	while($s=mysqli_fetch_array($sub))
	{
		$s_id=$s[0];
		echo "<option value='$s_id'>".$s[1]."</option>";
	}
	
	?>
	
	</select>
	</div>
   
   <div class="row" style="margin-bottom: 10px;">
        <input type="text" class="form-control" placeholder="Name" name="stname"/>
    </div>
  
   <div class="row" style="margin-bottom: 10px;">
        <input type="email" class="form-control" placeholder="Email" name="eid"/>
    </div>
  
   <div class="row" style="margin-bottom: 10px;">
        <input type="password" class="form-control" placeholder="Password" name="p"/>
    </div>
  
   <div class="row" style="margin-bottom: 10px;">
        <input type="number" class="form-control" placeholder="Mobile" name="mobile"/>
    </div>
  
   <div class="row" style="margin-bottom: 10px;">
        <input type="text" class="form-control" placeholder="Address" name="address"/>
    </div>
  
   <div class="row" style="margin-bottom: 10px;">
        <input type="date" class="form-control" placeholder="D.O.B" name="dob"/>
    </div>
  
   <div class="row" style="margin-bottom: 10px;">
        <input type="file" class="form-control" placeholder="Pic" name="pic"/>
    </div>
  
     <div class="row" style="margin-bottom: 10px;">
    <select name="status" class="form-control" placeholder="Status" name="status"/>
	<option value="" selected="selected" disabled="disabled">Select Status</option>
	<option>ON</option>
	<option>OFF</option>
	</select>
	</div>
    
    <div class="row" style="margin-bottom: 10px;">
  male<input type="radio"value="m" id="gen" name="gen"/>
		female<input type="radio"value="f" id="gen" name="gen"/>
</div>
  
 <div class="row" style="margin-bottom: 10px;">
	<input type="submit" value="Add Student" name="save" class="btn btn-success" />
	<input type="reset" value="Reset" class="btn btn-success"/>
</div>
</form>
</div>
</div>    </div>
</div>


                </div>
                </section>
           </div>
        </div> -->
        	
        
       
        																		
    
    
    <!--end registration-->
    
    <!--slider-->
    
      <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    
    <script src="js/owl.carousel.js"></script>
                         

    </body>
</html>