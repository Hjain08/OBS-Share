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

    <form action="display.php" method="POST"></form>
    <div class="container">

        <div class="col-lg-12">

                
            
                <h1 class="text-warning text-center">OBS Requests</h1>
                <br/>

                <table class="table table-striped table-hover table-border">
                    <tr class="bg-dark text-white text-center">
                        
                        <th> ID </th>
                        <th> USERNAME </th>
                        <th> EMAIL </th>
                        <th>IMAGE</th>
                        <th>STATUS</th>
                        <th>OPTIONS</th>
                         
                        
                    </tr>

                    <?php       

                        include 'conn.php';

                        $q = "SELECT * FROM assignment1";

                        $query = mysqli_query($con,$q);
    

                        while($result = mysqli_fetch_array($query)){


                     ?>

                    <tr class="text-center">

                       <td><?php echo $result['id']; ?></td>
                                    <td><?php echo $result['name']; ?></td>
                                    <td><?php echo $result['email']; ?></td>
                                    <td><img src="<?php echo $result['image']; ?>" height="100px" width="100px"></td>
                                    <td><?php echo $result['status']; ?></td>

            
                                        
                                        
                                    <td>
                                        
                                       <a href="approve.php?id=<?php echo $result['id']; ?>" onClick='return confirm("Are you sure you want to accept this request?")'>Approve</a> |  <a href="decline.php?id=<?php echo $result['id']; ?>" onClick='return confirm("Are you sure you want to Decline this request?")'>Decline</a>

                                    </td> 
                                                                                    
                    </tr>

                    <?php  
                }?>

                </table>

        </div>
        

    </div>
 
    <?php require_once 'includes/footer.php'; ?>
 </body>
 </html>