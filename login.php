
<?php
$login=0;
$invalid=0;


if($_SERVER['REQUEST_METHOD']=='POST'){
include 'db.php';
$username=$_POST['username'];
$password=$_POST['password'];



$sql = "Select *from `signup` where
username= '$username' and password='$password'";
$result=mysqli_query($conn,$sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
      // echo "login successful";
      $login=1;
    }
    else{
     // echo "invalid data";
$invalid=1;
       
    }
}
}

?>


<!doctype html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>login form</title>
  </head>
  <style>
  body{
    background:  rgb(0, 0,0,.8);
  }
  .container{
width:80%;
margin-top:2%;

  }
  .container h1{
    color:white;
    font-weight:700;
  }
  .container h1 span{
    color:#ffa343;
  }
  .form-container{
    margin-top:4%;
    padding:5px;
width:50%;
height:63vh;
color:black;
background:white;
border-radius:2%;
align-items: center;
margin-left:28%;
  }
  .form-container form{
    margin-top:3%;
  }

  header{
    padding: 15px 8%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
#close-mark{
  position: absolute;
    color:#ffa343;
    cursor: pointer;
    top:2rem;
    right:4rem;
    font-size: 2rem;
}
.logo{
    font-size: 33px;
    color: #fff;
    font-weight: 700;

}
.logo:hover{
text-decoration: none;
}

span{
    color: #ffa343 ;
}
.mb-3{
  position: relative;
        width: 100%;
}
.mb-3 input{
        width:60%;
        margin-left:15%;
    }
    .mb-3 i{
        position: absolute;
        top:8%;
        left:15%;
        font-size: 13px;
    }
    .mb-3 label{
      font-size:15px;
      font-weight:600;
      margin-left:2%;
    }
    .links{
      display:flex;
      gap:5px;
      margin-left:10%;
      margin-top:4%;
    }
    .btn-primary{
      width:30%;
      background:#ffa343;
      border:1px #ffa343;
      margin-left:33%;
      margin-bottom:2%;
    }
    .btn-primary:hover{
      background:#ffa343;
      box-shadow: 0 0 0.8rem #ffa343;
    color: #fff;
    }

</style> 
  <body >
   
  <?php
if($invalid){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Something went wrong!</strong> This user not exist.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>
  <?php
if($login){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successful!</strong> successfully login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>

<header>
        <a href="index.html" class="logo">Tr<span>ek</span></a>

        <div class="icon">
        <i class="fa-solid fa-xmark" id="close-mark"></i>
        </div>
    </header>
    <div class="container"> 
    <h1>LogIn your <span>Acoount</span></h1>
    <div class="form-container"> 
      <h4>Please enter your details</h4>
    <form action="signup.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">username</label>
    <i class="fa-solid fa-user"></i>
    <input type="text" class="form-control" name="username">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <i class="fa-sharp fa-solid fa-lock password"></i>  
    <input type="password" class="form-control"  name="password">
   
  </div>
  <button type="submit" class="btn btn-primary" style="font-weight: 600;" >Login</button>
  <div class="login_singup" id="login_acc">
              Don't have an account? <a href="signup.php" id="loginup" style="color: #ffa343">Sign In</a>
            </div>

</form>
<div class="links">

<div class="card" style="width: 13rem; height: 10vh;" >
  <div class="card-body">
  <i class="fa-brands fa-google" style="color:#EE3020"></i>
    <a href="#" class="card-link" >Login with Google</a>
  </div>
</div>
<div class="card" style="width: 13rem; height: 10vh;" >
  <div class="card-body">
  <i class="fa-brands fa-facebook-f" style="color:blue"></i>
    <a href="#" class="card-link" >login with Facebook</a>
  </div>
</div>
</div>

</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
  </body>
</html>