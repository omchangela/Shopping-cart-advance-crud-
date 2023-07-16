
<?php 
session_start();
if(isset($_SESSION['auth'])){
    $_SESSION['message'] = "You are already logged in";
    header('Location: index.php');
    exit();
}

include('includes/header.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    
    .loginpage {
        margin-left: 25%;
        margin-right: 25%;
        margin-top: 135px;
        padding: 35px;
        border-radius: 15px;
        background-color: white;
      }
      #loginbtn {
        padding: 10px 25px;
        margin-left: 14rem;
        margin-top: 15px;
      }
      .extra {
        margin-left: 10rem;
      }
</style>

<body>
    <div class="container ">
        <form method="POST" class="loginpage" action="functions/authcode.php">
            <?php if(isset($_SESSION['message'])){ 
                ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong> <?= $_SESSION['message']; ?></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?php
        unset($_SESSION['message']);
        }
        ?>
        <h1 class="text-center">Registration</h1>
            <div class="form-group ">
                <label class="mb-2">Username:</label>
                <input class="form-control mb-2" required type="text" name="name" >
                <span class="text-danger"></span>
            </div>
            <div class="form-group ">
                <label class="mb-2">Email:</label>
                <input class="form-control mb-2" required type="email" name="email" >
                <span class="text-danger"></span>
            </div>
            <div class="form-group ">
                <label class="mb-2">Phone:</label>
                <input class="form-control mb-2" type="number" required name="phone" >
                <span class="text-danger"></span>
            </div>
            <div class="form-group ">
                <label class="mb-2">Password:</label>
                <input class="form-control mb-2" type="password" required name="password" >
                <span class="text-danger"></span>
            </div>
            <div class="form-group ">
                <label class="mb-2">Confirm Password:</label>
                <input class="form-control mb-2" type="password" required name="confirm_password" >
                <span class="text-danger"></span>
            </div>
            
            <button type="submit" name="register_btn" id="loginbtn" class="btn btn-primary">Submit</button>
            <p class="extra">Already have an account? / <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</body>

</html>
