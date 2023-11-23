<?php
  $conn = mysqli_connect('localhost', 'root', '', 'payroll_s');
  if (!$conn)
  {
    die("Database Connection Failed" . mysql_error());
  }


  if(isset($_POST['submit'])!="")
  {
    $lname      = $_POST['lname'];
    $fname      = $_POST['fname'];
    $gender     = $_POST['gender'];
    $type       = $_POST['emp_type'];
    $division   = $_POST['division'];
    $contact    = $_POST['contact'];
    $address    = $_POST['address'];
    $email    = $_POST['email'];

    $sql = mysqli_query($conn, "INSERT into employee(lname, fname, gender, emp_type, division, contact, address, email)VALUES('$lname','$fname','$gender', '$type', '$division', '$contact', '$address', '$email')");

    if($sql)
    {
      ?>
        <script>
            alert('Employee has been added!');
            window.location.href='home_employee.php?page=emp_list';
        </script>
      <?php 
    }

    else
    {
      ?>
        <script>
            alert('An Error Occured');
            window.location.href='index.php';
        </script>
      <?php 
    }
  }
?>