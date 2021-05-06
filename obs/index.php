<?php 
  include 'conn.php';

  $Nerr = $Eerr = "";

  function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;

    }

    if(isset($_POST['submit'])){

    $uname = $_POST['uname'];
    $email = $_POST['email'];
    //$image = $_POST['image'];

    $files = $_FILES['file'];
    $filename = $files['name'];
    $fileerror = $files['error'];

    $filetmp = $files['tmp_name'];

    $fileext = explode('.',$filename);

    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png','jpg','jpeg');

    if(empty($_POST['uname'])){
      $Nerr = "Name is required!";
    } else{
      $uname = test_input($_POST['uname']);

      if(!preg_match("/^[a-zA-Z-' ]*$/",$uname)){
        $Nerr = "Only letters and white space allowed";
      }
    }
    

    if(empty($_POST['email'])){
      $Eerr = "Email ID is required";
    } else{
      $email = test_input($_POST['email']);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $Eerr = "Enter a valid Email Id!";
      }
    }

   

    if(in_array($filecheck,$fileextstored)){

        $destinationfile = 'upload/'.$filename; 
        move_uploaded_file($filetmp, $destinationfile);

        $q = "INSERT INTO `assignment1`( `name`, `email`, `image`) VALUES ('$uname','$email', '$destinationfile')" ;

        $querry = mysqli_query($con, $q);

      }

        //$displayquery = " select * from assignment1";

        //$querydisplay = mysqli_query($con, $displayquery);


    

  }
?>

 <!DOCTYPE html>
 <html>
 <head>
  <title>
    OBS
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
 </head>
 <body>
  <?php require_once 'includes/header.php'; ?>
   <form action="index.php" method="post" enctype="multipart/form-data">
   
    <div class="col-lg-6 m-auto">

      <form method='post'>

        <br/>
        <div class="card">
          
          <div class="card-header bg-dark">
            
            <h1 class="text-white text-center">Regestration Form</h1>
          </div>


          <label>User Name:</label>

          <input type="text" name="uname">

          <span class="error">* <?php echo $Nerr;?></span>
             <br/>
          

          <label>Email Id:</label>

          <input type="text" name="email" class="form-control">

          <span class="error">* <?php echo $Eerr;?></span>
             <br/>
          

          
          <label>Image:</label>

          <input type="file" name="file" id="file" class="form-control">
          

          <button class="btn btn-success" type="submit" name="submit" >Submit</button>
          <br/>
          

        </div>
        
      </form>
    </div>
  </form>
  <br>
  <br>
  <?php require_once 'includes/footer.php'; ?>
 </body>
 </html>