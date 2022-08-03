<?php
include('db.php');
session_start();
?>
<?php
$sql="select * from doctor";
$query2=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor_Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="table-responsive">
<table class="table">
              <thead>
                <tr>
                  <th scope="col">Doctor ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Contact No</th>
                  <th scope="col">Specialisation</th>
                </tr>
              </thead>
              <tbody>
                <?php while($array=mysqli_fetch_row($query2)): ?>
                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[3];?></td>
                   
                    

                </tr>
                <?php endwhile; ?>
                
              </tbody>
            </table>
            </div>
            <button class="btn btn-outline-success"><a href="insert_doctor.php">Add new Doctor Details</a></button>
            <button class="btn btn-outline-success"><a href="update_doctor.php">Update Doctor details</a></button>
            <button class="btn btn-outline-success"><a href="delete_doctor.php">Delete Doctor details</a></button>
</body>
</html>