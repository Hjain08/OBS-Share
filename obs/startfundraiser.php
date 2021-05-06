<?php 
  include 'conn.php';

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


    if($query)
    {
      echo '<script> alert("Data inserted into the db");</script>';
      header('location: ../display.php');
    }else{
      echo '<script> alert("Data not inserted");</script>';
    }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action="startfundraiser.php" methos="POST" >
<div class="container">
  <!-- Trigger the modal with a button -->
  <br>
  <br>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">START A FUNDRAISER</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="text-align:center">Tell us more about your Fundraiser</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <label>Full Name:</label>
          <br>
          <input type="text" placeholder="Your Full Name" name="name" size="72" class="form-control">
          <br/>
          <br>

          <label>Email ID:</label>
          <br>
          <input type="text" placeholder="Your Email id" name="email" size="72" class="form-control">
          <br/>
          <br>


          <label>Contact Number:</label>
          <br>
          <input type="text" placeholder="Your Contact Number" name="number" size="72" class="form-control">
          <br/>
          <br>

          <label>Fundraiser Title:</label>
          <br>
          <input type="text" placeholder="Heading of your Fundraiser" name="title" size="72" class="form-control">
          <br/>
          <br>

          <label>Choose Goal Amount:</label>
          <br>
          <input type="text" placeholder="How much do you want to raise?" name="goal" size="72" class="form-control">
          <br/>
          <br>

          <label>Patient's Name:</label>
          <br>
          <input type="text" placeholder="Name of the patient as mentioned in Aadhar card" name="pname" size="72" class="form-control">
          <br/>
          <br>

          <label>Patient's Age:</label>
          <br>
          <input type="text" placeholder="Patient's Age" name="page" size="72" class="form-control">
          <br/>
          <br>

          <label>Relationship:</label>
          <br>
          <input type="text" placeholder="Your relationship with them" name="prelation" size="72" class="form-control">
          <br/>
          <br>

          <label>Hospital Name:</label>
          <br>
          <input type="text" placeholder="Hospital Name" name="hname" size="72" class="form-control">
          <br/>
          <br>

          <label>Hospital Address:</label>
          <br>
          <input type="text" placeholder="Hospital Address" name="hadd" size="72" class="form-control">
          <br/>
          <br>

          <label>Add Patient's Image:</label>
          <br>
          <input type="file" name="file" id="file" class="form-control" size="72">
          <br/>
          <br>

          <label for="ta1">Write Your Story:</label>
          <br>
          <textarea id="ta1" placeholder="Tell us the story about why you are running a Fundraiser" name="story" rows="4" cols="50" class="form-control"></textarea>
          <br>
          <br>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <button type="submit" class="btn btn-primary" type="submit" name="submit" value="Submit">Submit</button>

        </div>
      </div>
      
    </div>
  </div>
  
</div>
</form>
</body>
</html>
