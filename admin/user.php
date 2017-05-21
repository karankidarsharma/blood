<html>
<title>blood</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<head>
  <style>
/* Center the loader */
#loader1 {
  
  width: 400px;
  color: #a01310;
   position: absolute;
   margin-left: 230px;
   margin-top: 245px;
   

}
#loader {
  position: absolute;
  left: 60%;
  top: 50%;
  background-image: url('image/1.gif');
  z-index: 1;
  width: 350px;
  height: 350px;
  margin: -75px 0 0 -75px;
  border: 30px solid #a01310;
  border-radius: 50%;
  border-top: 30px solid grey;
  border-bottom: 30px solid grey;
  width: 220px;
  height: 220px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  70% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-text-align: left;
}
</style>
 

  
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../bootstrap/js/jquery.min.js" rel="stylesheet" type="text/css">
  <link href="../bootstrap/css/js/bootstrap.min.js" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../index.css">
  <link rel="stylesheet" href="../div.css">
  

</head>




<body onload="myFunction()" style="margin:0;">
<div id="loader1"><h1 style=" font-size:50px; text-text-align: center;"> </br><b> Hello! Admin!</b><img src="image/2.gif"></br> </h1></div>
<div id="loader"><h1 style="color:grey; font-size:30px; text-text-align: center;"> </h1></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
  








 <nav class="navbar navbar-inverse nav1">
  <div class="container-fluid">
    <div class="navbar-header ">
      <a class="navbar-brand" href="../index.php">Donate Blood</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="user.php">Users</a></li>
      <li ><a href="update.php">Update</a></li>
      <li ><a href="news.php">NEWS feeds</a></li>
      <li ><a href="delete.php">Delete</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php"><span class="glyphicon glyphicon-log-out"></span> Logout!</a></li>
    </ul>
  </div>
</nav>
<header class="jumbotron header h1">

<h1 class="h11">Available Users</h1>

</header>
<body>
<div class="container">
<table >
<tr style="border:2px; color:#990000;">
<td style="width:20%; border:2px solid #990000;; text-align:center; margin:10px;" >
</br>Donar No:201220 </br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img src="image/ab+.jpg" alt=' NO IMAGE' width='250' height='250' text-align='middle' border="2px"; >
</br></br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspName:Karan </br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLast Name:Sharma</br>
  
  Email:karan@gmail.com</br>
  Phone No: 0224154321</br>
</br>
</td>
<td style="width:20%; border:2px solid #990000;; text-align:center; margin:10px;" >
</br>Donar No:201220 </br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img src="image/ab+.jpg" alt=' NO IMAGE' width='250' height='250' text-align='middle' border="2px"; >
</br></br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspName:Karan </br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLast Name:Sharma</br>
  
  Email:karan@gmail.com</br>
  Phone No: 0224154321</br>
</br>
</td>&nbsp&nbsp
<td style="width:20%; border:2px solid #990000;; text-align:center; margin:10px;" >
</br>Donar No:201220 </br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img src="image/ab+.jpg" alt=' NO IMAGE' width='250' height='250' text-align='middle' border="2px"; >
</br></br>Name:Karan </br>
  Last Name:Sharma</br>
  Email:karan@gmail.com</br>
  Phone No: 0224154321</br>
</br>
</td>
<td style="width:20%; border:2px solid #990000; text-align:center; margin:10px;" >
</br>Donar No:201220 </br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img src="image/ab+.jpg" alt=' NO IMAGE' width='250' height='250' text-align='middle' border="2px"; >
</br></br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspName:Karan </br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLast Name:Sharma</br>
 
  Email:karan@gmail.com</br>
  Phone No: 0224154321</br>
</br>
</td></br>

</tr>

  <table>


</div>
  </body>
</br>
  
  </div>
</html>
</div>
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
   document.getElementById("loader1").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>