 
<!doctype html>
    <html lang="en">
      <head>
        <title>>IIIT SONEPAT REGISTRATION</title>
       <style> 
      body
      {
         background-image: linear-gradient(140deg,#2f00ff,#ff00ff);
      }
       input
      {
           border-radius:10px;
           border: none;
            padding: 2.5px;
            padding-left: 15px;
            font-size:16px;
            font-style:italic;
            background-image:linear-gradient(160deg,#04ef24,#1190fa);  
            color: rgb(211,26,14);
            border-bottom: 2px solid rgb(100,100,250);
      } 
      button
      {
         border:none;
         border-style:inset;
         padding-left:50px;
         padding-right:50px;
         border-radius:10px;
         background-image:linear-gradient(160deg,#04ef24,#1190fa);  
         }    
      h2
      {
        font-size:32px;
        color:rgba(250,230,210,0.76);
        font-style:inset;
        /* border-radius:5px; */
        /* background-image: linear-gradient(50deg,purple,green);  */
      }
      form 
      {
             border:none;
            /* background:transparent; */
             background-image: linear-gradient(#ff0080,blue,black); 
             padding:10px;
             height:32%;
             border-radius:4px;
             /* border-style:inset; */
             border-radius:45px 0px 45px 0px;
             width:280px;
             margin:auto;
      }
      #reg
      {
          border:none;
          background-image:linear-gradient(160deg,#000000,#f000ff);
          width:210px;
          border-radius:30px;
      }
      #search
      { 
          color: cornsilk;
          margin-top: 6px;
          margin-left: 400px;
          margin-bottom: 6px;
      }
    .navbar 
     {
           background-image: linear-gradient(180deg,#00ffbf,#ff00ff);
           border-radius: 8px;
     }
     .navbar ul
     {
         overflow: auto;
     }
     .navbar  li
     {
            float: left; 
            list-style: none;
            padding-top: 10px;
            font-size:16px;
            padding-bottom: 3px;
            padding-left: 25px;
     }
    .navbar li a
     { 
        margin: 10px,100px;
       text-decoration: none;
     }
     a
     {
       color:rgba(241,242,243,.851);
     }
    </style>
</head>
<body>

<!-- <h1><marquee behavior="Scroll" loop="100000000000000"Scrolldelay="5">HELLO SIR ! Please Enter A Valid Username and Password To Become An Admin</marquee></h1>-->
<hr>
<hr>
<div class="navbar">
        <nav>
            <ul>
            <li><a href="http://iiitsonepat.ac.in/">Home</a></li>
            <li><a href="http://iiitsonepat.ac.in/home/about">About</a></li>
            <li><a href="http://iiitsonepat.ac.in/carrers">jobs</a></li> 
            <li><a href="http://iiitsonepat.ac.in/placements">Placement</a></li>
            <li><a href="http://iiitsonepat.ac.in/contact-us">Contact us</a></li>
            <div class="search">
            <input type="text" class="search" id="search" placeholder="type for search">
           </div> 
           </ul>
        </nav>
 </div>
<div id="container">
    <form action="/prabhat/IIITSONEPAT.php" method="post">
    <center><div id="reg"><h2><u><i>Registration</i></u></h2></div></center>
    <center><div class="form-group">
    <input type="text" name="name" id="name"placeholder="Enter Your Name"class="form-control"  id="exampleInputPassword1">
    </div></center>
    <br>
    <center><div class="form-group">
    <input type="number" name="roll" id="roll"placeholder="Enter Your Roll no."class="form-control"  id="exampleInputPassword1">
    </div></center>
    <br>
    <center><div class="form-group">
    <input type="email" name="email" id="email"class="form-control"placeholder="Enter Your Valid Mail" >
    </div></center>
    <br>
    <center><div class="form-group">
    <input type="text" name="branch" id="branch" placeholder="Enter Your Branch">
    </div></center>
    <br>
    <center><div class="form-group">
    <input type="text" name="college" id="college"placeholder="Enter Your College Name">
    </div><center>
    <br>
    <center><div class="form-group">
    <input type="text" name="Skill" id="skill"placeholder="your skills..">
    </div></center>
    <br><center><b><button onclick="register()" type="submit" name="btn">Submit</b></button></center>
</form><br>
</div>
<hr><hr>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="SONEPAT";
    $con=mysqli_connect($servername,$username,$password,$database);
    //echo "<script>funtion val</script>";
    $name=$_POST['name'];
    $roll=$_POST['roll'];
    $email=$_POST['email'];
    $branch=$_POST['branch'];
    $college=$_POST['college'];
    $skill=$_POST['Skill'];
    if(($name!=NULL)&&($name!=NULL)&&($branch!=NULL)&&($roll!=NULL)&&($college!=NULL)&&($skill!=NULL))
    {
    $sql="INSERT INTO `login` ( `NAME`, `ROLL NO:`, `E-MAIL`, `BRANCH`, `COLLEGE`, `SKILL`) VALUES ('$name','$roll', '$email', '$branch', '$college', '$skill')";
    $RESULT=mysqli_query($con,$sql);
    if($RESULT)
     {
         echo "<script>alert(`Name:'$name' Roll no:'$roll' E-mail:'$email' Branch:'$branch' College:'$college'Skill:'$skill'`)</script>";
     }
    else
     {
         echo"<script>alert(`alert:ERROR!!`)</script>";
     }
    }
    else
    {
        echo"<script>alert(`Alert:Please fill it completely`)</script>";
    }
    ?>