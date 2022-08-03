<?php
include('db.php');
session_start();
?>

<?php
$sql;
if (isset($_POST['save'])) {
    $sql = "UPDATE doctor SET Doctor_Name=" . $_POST["Doctor_Name"] . ",Contact_No=" . $_POST["Contact_No"] . ",Specialisation=" . $_POST["Specialisation"] . ",Hospital_ID=" . $_POST["Hospital_ID"] . ")
        WHERE Doctor_ID= ". $_POST["Doctor_ID"] . "";
    
    $query = mysqli_query($conn, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid">


        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Update Doctor Details</h5><br>

    <form method="post">
        
        <label id="first"> Enter your Doctor ID:</label><br />
        <input type="text" name="Doctor_ID"><br />
         <br>
        <label id="first"> First name:</label><br />
        <input type="text" name="Doctor_Name"><br />
        <br>

        <label id="first">Contact No</label><br />
        <input type="text" name="Contact_No"><br />
        <br>
        <label id="first">Specialisation</label><br />
        <input type="text" name="Specialisation"><br />
        <br>
        <label id="first">Hospital ID</label><br />
        <input type="text" name="Hospital ID"><br /><br>        
        <br>

        <button type="submit" name="save" class="btn btn-outline-success">Save</button>
    </form>

</body>

</html>