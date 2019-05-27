<?php
$servername = "localhost";
$username = "root";
$password = "";
$dataBase = "sono";
$woord = "";
$connection = mysqli_connect($servername, $username, $password, $dataBase);
if ($connection->connect_error) {
  die();
}
session_start();
if(!isset($_SESSION['loggedInState'])){
  $_SESSION['loggedInState'] = false;
}
echo "<script src='SonoScript.js'></script>";
if(isset($_POST["Inloggen"])){
  if(isset($_POST["Username"]) && isset($_POST["Password"])){
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $sql = "SELECT Username, Password FROM SonoBase WHERE Username = '$username' AND Password = '$password'";
    $result = $connection->query($sql);
    $row = mysqli_fetch_array($result);
    $num_rows = mysqli_num_rows($result);
    if($num_rows > 0){
      ?>
      <script type='text/javascript'>
        document.addEventListener('DOMContentLoaded', function () {
          logInCheck(true);
        });
      </script>
      <?php
      $_SESSION['loggedInState'] = true;
    }
    else{
      $_SESSION["loggedInState"] = false;
      ?>
      <script type='text/javascript'>
        document.addEventListener('DOMContentLoaded', function () {
          logInCheck(false);
        });
      </script>
      <?php
    }
  }
}
echo "<script src='SonoScript.js'></script>";
if(isset($_POST["Registreren"])){
  if(isset($_POST["Username"]) && isset($_POST["Password"])){
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $sql = "SELECT Username, Password FROM SonoBase WHERE Username = '$username' AND Password = '$password'";
    $result = $connection->query($sql);
    $row = mysqli_fetch_array($result);
    $num_rows = mysqli_num_rows($result);
    if($num_rows == 0){
      $sql1 = "INSERT INTO SonoBase (Username, Password) VALUES ('$username', '$password')";
      $result = $connection->query($sql1);
      ?>
      <script type='text/javascript'>
        document.addEventListener('DOMContentLoaded', function () {
          registerCheck(true);
        });
      </script>
      <?php
    }
    else{
      ?>
      <script type='text/javascript'>
        document.addEventListener('DOMContentLoaded', function () {
          registerCheck(false);
        });
      </script>
      <?php
    }
  }
}
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="SonoCSS.css">
  </head>
  <body>
    <div class="header" id="myHeader">
      <div class="loginModel" id="loginModelCheck">
        <div class="teamLogo">
          <img src="TeamLogo.PNG" width="115px" height="115px">
        </div>
        <form action="SonoWebsite.php" method="post" id="real">
        </form>
        <script type='text/javascript'>
          var check = "<?php echo $_SESSION['loggedInState']; ?>";
          function loginTrue(){
            if(check == true){
              document.getElementById("real").innerHTML += 'Logged In!';
            }
            else if(check == false){
              document.getElementById("real").innerHTML += '<form action="SonoWebsite.php" method="post" id="real">';
              document.getElementById("real").innerHTML += 'Username: <br><input type="text" name="Username" size="15px"><br>';
              document.getElementById("real").innerHTML += 'Password: <br><input type="password" name="Password" size="15px"><br>';
              document.getElementById("real").innerHTML += '<input type="submit" name="Inloggen" value="Log In" style="color: rgb(181, 255, 173); background-color: rgb(173, 204, 255); border: 2px solid;">';
              document.getElementById("real").innerHTML += '<input type="submit" name="Registreren" value="Register" style="color: rgb(181, 255, 173); background-color: rgb(173, 204, 255); border: 2px solid;">';
              document.getElementById("real").innerHTML += '<p id="TextLogin" style="text-align = center; margin-top: -10px;"></p>';
              document.getElementById("real").innerHTML += '</form>';
            }
            else{
              document.getElementById("real").innerHTML += '<form action="SonoWebsite.php" method="post" id="real">';
              document.getElementById("real").innerHTML += 'UsernameA: <br><input type="text" name="Username" size="15px"><br>';
              document.getElementById("real").innerHTML += 'PasswordA: <br><input type="password" name="Password" size="15px"><br>';
              document.getElementById("real").innerHTML += '<input type="submit" name="Inloggen" value="Log In" style="color: rgb(181, 255, 173); background-color: rgb(173, 204, 255); border: 2px solid;">';
              document.getElementById("real").innerHTML += '<input type="submit" name="Registreren" value="Register" style="color: rgb(181, 255, 173); background-color: rgb(173, 204, 255); border: 2px solid;">';
              document.getElementById("real").innerHTML += '<p id="TextLogin" style="text-align = center; margin-top: -10px;"></p>';
              document.getElementById("real").innerHTML += '</form>';
            }
          }
          loginTrue();
        </script>

      </div>
    </div>
    <div class="infoBoxUs">
      <h2 style="font-size: 60px;">Who are we?</h2>
      <h1 style="font-size: 20px;">Hello! We are the Gersonies. We made a game for a project for school! Here is what this game is all about. We have made an endless runner called Sono. Sono was the idea of us brainstorming for one in class.
      We had this very cool idea for an endless runner, floating through different biomes/seasons! </h1>
      <br><br>
      <h1 style="font-size: 20px">We have made our character in paint using forms and shapes. Ontop of that we are adding some neat effects to the character in game so it makes him look special in his own way.</h1>
    </div>
    <div class="infoBoxUs" style="margin-left: 40px;">
      <h2>yee</h2>
    </div>
  </body>
</html>
