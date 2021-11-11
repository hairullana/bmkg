<?php

session_start();

if(isset($_SESSION["login-bmkg"]) && $_SESSION["login-bmkg"] == true){
  echo "
    <script>
      alert('Anda sudah login!')
      location.href = 'index.php'
    </script>
  ";
}

require 'conn.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Masuk | BMKG</title>
    
    <!-- Custom styles for this template -->
    <link href="src/style.css" rel="stylesheet">



  </head>
  <body class="text-center">
    <form class="form-signin" method="post">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
        <img class="mb-4" src="https://i.ibb.co/2jdyRKg/logo.png" alt="" width="72" height="72">
        <h5 class="card-title">Login</h5>

        <label for="inputEmail" class="card-subtitle mb-2 text-muted">Username</label>
        <input name="username" type="name" id="inputname" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="card-subtitle mb-2 text-muted">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="login" class="btn btn-primary" type="submit">Sign in</button>
        </div>
        </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php

if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);

    if ($password != $user["password"]) {
      echo "
        <script>
          alert('Password salah!')
        </script>
      ";
    }else {
      $_SESSION["login-bmkg"] = true;
      $_SESSION["role"] = $user["jabatan"];
      echo "
        <script>
          location.href = 'index.php'
        </script>
      ";
    }

  }
}

?>