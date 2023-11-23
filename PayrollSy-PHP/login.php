<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Payroll System</title>


    <link rel="stylesheet" href="assets/css/login.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

</head>


<body class="hold-transition login-page">
<?php
  session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username']))
    {
      $connection = mysqli_connect('localhost', 'root', '','payroll_s');

        if (!$connection)
        {
          die("Database Connection Failed" . mysql_error());
        }
        $username = $_POST['username'];
        $password = $_POST['password'];


        //Checking is user existing in the database or not
        $query = "SELECT * FROM user WHERE username='$username' and password='$password'";
        $result = mysqli_query($connection, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        if($rows==1)
        {
          $_SESSION['username'] = $username;
          header("Location: index.php");
        }
        else
        {
          ?>
          <script>
            alert('Login Invalid, please try again.');
            window.location.href='login.php';
          </script>
          <?php
        }
    }
    else
    {
?>


<br><br><br><br><br><br><br><br>
<div class="container">
  <section id="content">
    <form action="" method="post">
      <h1>Login Panel</h1>
      <div>
        <input name=username type="text" placeholder="Username" required>
        <!-- <input type="text" placeholder="Username" required="" id="username" /> -->
      </div>
      <div>
        <input name=password type="password" placeholder="Password" required>
        <!-- <input type="password" placeholder="Password" required="" id="password" /> -->
      </div>
      <div>
        <input type="submit" value="Login" />
        <!-- <a href="index.php">Back to Home</a> -->
        <!-- <a href="">Forgot password?</a> -->
      </div>
    </form><!-- form -->
  </section><!-- content -->
</div><!-- container -->


<?php } ?>


  </body>
</html>