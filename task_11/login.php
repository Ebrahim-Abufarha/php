<?php include('config.php') ;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.3.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-laZ3JUZ5Ln2YqhfBvadDpNyBo7w5qmWaRnnXuRwNhJeTEFuSdGbzl4ZGHAEnTozR" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/boosted@5.3.3/dist/js/boosted.bundle.min.js" integrity="sha384-3RoJImQ+Yz4jAyP6xW29kJhqJOE3rdjuu9wkNycjCuDnGAtC/crm79mLcwj1w2o/" crossorigin="anonymous"></script>
</head>
<body>
<div class="col-lg-12 row">
<div class="col-lg-12 ">

    <div class="justify-content-between">
       
    </div>
<section  class="col-12" style="justify-items: center;">
    <form  method='POST'>
    <h1 style="margin-top: 10px;"> Log In </h1>

        <div class="mb-3 mt-3">
        <label  for="email" class="form-label is-required">Email address</label>
        <input onblur="validate1(event)" type="email" class="form-control" required id="email1" name="email">
        <div id="txemail1" class="form-text small">eg: username@domain.com</div> 
        </div>

        

        <div class="mb-3 mt-3">
        <label  for="pwd" class="form-label is-required">Enter Your Password</label>
        <input onblur=" pas1(event) " id="pass1" type="password" class="form-control"  required name="password">
        <div id="masspass1" class="form-text small">The Password should be between 6-18 characters.</div> 

        
        </div>
       
        <div class="a">
                    <button onclick="loginn1(event)" style="width: 450px;height: 50px; margin-top: 20px;" type="submit" class="btn btn-primary" name="login">login</button>
        </div>
        
</form>
</section>
</div>
</div>
<script src="all.js"></script>
</body>
</html>


<?php 
include('config.php'); 

if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(!empty($email) && !empty($password)){
        $result = $conn->query("SELECT * FROM users WHERE email = '$email'");

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $hashed_password = $row['password'];

            if($password == $hashed_password){
                session_start();
                $_SESSION["user_email"] = $email;
                $_SESSION["user_name"] = $row['user_name'];
                if($row['role']=="user"){
                header("Location: read.php");
                    exit();}
                    else{
                        header("Location: admin.php");
                    }
            } else {
                echo "<script>alert('كلمة المرور غير صحيحة!');</script>";
            }
        } else {
            echo "<script>alert('البريد الإلكتروني غير موجود!');</script>";
        }
    } else {
        echo "<script>alert('يرجى ملء جميع الحقول!');</script>";
    }
}
?>
