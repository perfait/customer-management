<?php

require_once ("php/operation.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    
<main>
    <div class="container text-center">
    <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i>Add Customers</h1>
    <div class="d-flex justify-content-center pt-5">
<form action="" method="post" class="w-50">

<div class="form-group">
  <label for="firstName">First Name:</label>
  <input type="text" class="form-control" name="firstName" required>

  <label for="lastName">Last Name:</label>
  <input type="text" class="form-control" name="lastName">

  <label for="dateOfBirth">Date Of Birth:</label>
  <input type="date" class="form-control" name="dateOfBirth" required>

  <label for="idNumber">Id Number:</label>
  <input type="text" class="form-control" name="idNumber" required>

  <label for="phoneNumber">Phone Number:</label>
  <input type="text" class="form-control" name="phoneNumber" required>
</div>


<button type="submit" class="btn btn-primary" name="create">Submit</button>
</form>
</div>


    <!--Bootstrap table-->
    <div class="container text-center">
    <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i>Customer list</h1>
    <div class="d-flex justify-content-center pt-5">
    <div class="d-flex table-data pt-5">
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>FirstName</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Date of Birth</th>
                    
                </tr>
                </thead>

                <tbody id="tbody">
                                   
                <?php
                  
                        $result = getData();

                        if($result){
                          $rank = 1;
                            while($rank<=20 && $row = mysqli_fetch_assoc($result)){
                                    echo "<td>" .$row['id']. "</td>";
                                    echo "<td>" .$row['firstName']. "</td>";
                                    echo "<td>" .$row['lastName']. "</td>";
                                    echo "<td>" .$row['phoneNumber']. "</td>";
                                    echo "<td>" .$row['dateOfBirth']. "</td>";
   
                                echo "</tr>";
                                }

                                ?>
                            <?php
                            
                        }
                    
                    

                ?>
            </tbody>
            
          </table>
        </div>


</div>
</main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>

<script src="../Crud/php/main.js"></script>
</body>
</html>
