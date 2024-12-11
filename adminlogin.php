<?php
include "connection.php";
?>

<html>
    <head>
        <title> </title>
        <link href="D1.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/bootstrap-grid.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    $(document).ready(function(){
    AOS.init();
  });
  </script>
</head>
<body>
<div class="container-fluid">
<div class="row" id="raghu">
    <div class="col-lg-6 ms-5 mt-5 loginform" >
    <span class="bg-warning text-dark p-1"> L O G I N</span>
    <h1 class="mt-2 display-1 fw-bold" id>Login</h1>
    <h2 class="mt-2 nnnn">Login To Your Account</h2>
    

    <div  id="contactform">
        <?php
         if(isset($_POST['btnsubmit']))
         {
             
             $username=mysqli_real_escape_string($con,$_POST['username']);
             $password=mysqli_real_escape_string($con,$_POST['password']);
             $query="select * from adminlogin where username='$username' and password='$password'";
             $result= mysqli_query($con,$query);
             if(mysqli_num_rows($result)>0)
             {
                echo"<script>window.location.href='admin/dashboard.php'</script>";
             }
             else{
                echo"<p class='text-danger'>wrong username and password</p>";
             }
            }
            ?>
            
            <form action="#" method="post">
                <input type="text" class=" form-control mt-5 pt-3 me-5" placeholder=" enter username" name="username" />
                <input type="text" class="form-control mt-5 pt-3" placeholder="enter password" name="password"/>
                <input type="checkbox" class="me-2"  /><label class="mt-3 "> Remember me</label>
                <button  type="submit" class=" form-control btn btn-black rounded-0 py-2 px-4 mt-4" name="btnsubmit"> Submit<i class="bi bi-arrow-right mt-2 "></i>
                </button>
        </form>
</div>
        </div>
</div>
</div>
</body>
</html>
