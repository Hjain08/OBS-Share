<?php 
  
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'internship');

  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $title = $_POST['title'];
    $goal = $_POST['goal'];
    $pname = $_POST['pname'];
    $page = $_POST['page'];
    $prelation = $_POST['prelation'];
    $hname = $_POST['hname'];
    $hadd = $_POST['hadd'];
    $file = $_POST['file'];
    $story = $_POST['story'];  

    $q = "INSERT INTO `start`(`name`, `email`, `number`, `title`, `goal`, `pname`, `page`, `prelation`, `hname`, `hadd`, `image`, `story`) VALUES ('$name','$email','$number','$title','$goal','$pname','$page','$prelation','$hname','$hadd','$file','$story')";
    $query = mysqli_query($con, $q);

    header("Location: ./home.php");

   /* if($query)
    {
      echo '<script> alert("Data inserted into the db");</script>';
      
    }else{
      echo '<script> alert("Data not inserted");</script>';
    }*/

  }
?>