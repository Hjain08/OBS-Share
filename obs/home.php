<?php 
session_start();

if(!isset($_SESSION['username'])){
header("Location: loginindex.php");
}

require_once 'includes/header.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>OBring Smile</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">

      <!--<link rel="stylesheet" type="text/css" href="home.css" />-->

</head>

<body class="container">
  
   <!-- <?php echo "<h1>Welcome " . $_SESSION['username']."</h1>" ;?>-->
     
    <!--<h1 class="text-center text-danger mb-5" style="font-family: 'Abril Fatface', cursive;">OBring Smile HomePage</h1>-->

    <div class="row">

    <?php
          include 'conn.php';

          $q = " SELECT `name`,`email`,`image` FROM `assignment1` WHERE `status`='Approved'";

          $query = mysqli_query($con,$q);

            while( $result = mysqli_fetch_array($query) ) {
            ?>
                
            <div class="col-lg-3 col-md-3 col-sm-12">
                <br>
            
            <form>
              <div class="card-img-top">
                <div class="card" style="width: 250px" "height:50px">

                    <div class="avatar">
                         <img src="<?php echo
                     $result['image']; ?>" alt="phone" class="img-fluid mb-2" height="50px">
                    </div>

                    <div class="card-body">
                         <h5 class="card-title"><?php echo $result['name']; ?></h5>

                         <p class="card-text"><?php echo $result['email']; ?></p>

                         
                    </div class="col text-center">
                        <a href="#" class="btn btn-primary" >Donate</a>
                    <div>
                        
                    </div>
                </div>
            </form>

        </div>
        </div>

            <?php } ?>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>