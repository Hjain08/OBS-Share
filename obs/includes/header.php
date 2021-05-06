<?php
if(!isset($_SESSION['username'])){
  session_start();
//header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1   padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>


<div class="header">
  <a href="#default" class="logo">                    
    <img src="logo.png" alt="logo" height="50px" width="100px">
</a>

  <div class="header-right">
    <a href="home.php">Home</a>
    <!--<a href="#" button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Start a Fundraiser</a>-->
    <a href="index.php" button type="button" class="btn btn-info btn-lg">Start a Fundraiser</a>
    <a href="display.php">Admin</a>
    <!--<a href="logout.php">Logout</a>-->
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
     <img src="user.png" height="20px" width="20px">
       <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <?php echo "<h5> " . $_SESSION['username']."</h5>" ;?>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">View Profile</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Fundraisers</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">My Donations</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">Logout</a></li>
    </ul>
<br>
<br>
<?php echo "<h5>Welcome " . $_SESSION['username'] ."</h5>" ;?>
    <!--
-->
  </div>
</div>
</body>
</html>
