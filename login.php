<?php 
session_start();

if(isset($_SESSION['auth'])){
    $_SESSION['message'] = "You are already logged in";
    header('Location: index.php');
    exit();
}

include('components/header.php');
include('components/connect.php'); 
?>
<style>
    
</style>
<div class="container mt-5 ">
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
        <h1 class="text-center">Login</h1>
          
            <div class="form-group ">
                <label class="mb-2">Email:</label>
                <input class="form-control mb-2" required type="email" name="email" >
                <span class="text-danger"></span>
            </div>
            <div class="form-group ">
                <label class="mb-2">Password:</label>
                <input class="form-control mb-2" type="password" required name="password" >
                <span class="text-danger"></span>
            </div>
            
            <button type="submit" name="login_btn" id="loginbtn" class="btn btn-primary">Submit</button>
            <p class="extra">haven't  account? / <a href="register.php">Register </a>.</p>
        </form>
    </div>
