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

    <style>
</style>

</head>

<body>

<div class="right">

<section  class="" style="justify-items: center;">
        <h1 style="margin-top: 10px;">Create an account</h1>

    <form style="width: 40%;"  method="post">



        <div class="mb-3 mt-3">
        <label  for="email" class="form-label is-required">Email address</label>
        <input type="email" class="form-control" id="email" name="email" onblur="validate(event)" required >
        <div class="form-text small" id="txemail">eg: username@domain.com</div> 
        </div>

        <div class="mb-3 mt-3">
        <label  for="text" class="form-label is-required">User Name</label>
        <input id="namee" onblur="nam(event)" type="text" class="form-control"  name="user-name" required >
        <div class="form-text small" id="txname">Enter Your Name </div> 
        </div>

        <div class="mb-3 mt-3">
        <label  for="pwd" class="form-label is-required  ">Create Password</label>
        <input id="pass" onblur="pas(event)" type="password" class="form-control" name="password" required > 
        <div id="masspass" class="form-text small">The Password should be between 6-18 characters.</div> 

        <div class="mb-3 mt-3">
            <label  for="pwd" class="form-label is-required">Verify Password</label>
            <input onblur="equalpass(event)" id="pass2" type="password" class="form-control" name="confpass" required >
            <div id="masspass2" class="form-text small">The Password should be between 6-18 characters.</div> 
    

        </div>
        <div class="form-check mb-3">
        <label class="form-check-label is-required">
            <input class="form-check-input" type="checkbox" name="remember" required>I agree to the <a href="#">terms & conditions</a> Orange. 
        </label>
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" checked> Receive Coding Academy Newsletter.
            </label>
        </div>
        <div class="a">
                    <button onclick="sinin(event)" id="sinupp" style="width: 100%; height: 50px; margin-top: 20px;" type="submit" class="btn btn-primary" name="hello">Sign Up</button>
</div>
<div class="a">
                    <button onclick="haveacc()" style="width: 100%; height: 50px; margin-top: 20px;border: 2px solid;" type="button" class="btn btn-Light grey">Already have an account?Login</button>
</div>
</form>
</section>

</div>
</div>
<script src='1.js'></script>

</body>
</html>

<?php 
include('config.php') ;

    if(isset($_POST["hello"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $conf = $_POST["confpass"];
    $user_name = $_POST["user-name"];
    $if = true;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $if = false ;
    }
    if($password != $conf){
        $if = false ;
    }
    if($password < 6){
        $if = false ;
    }
    if($if){
        $sql = "INSERT INTO users (email, user_name , password , role)
    VALUES ('$email', '$user_name', '$password' , 'user')";
                            header("Location: login.php");

    }
    else{
        echo"There is error";
    }
}

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  

?>