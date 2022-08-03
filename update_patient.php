<?php
include('db.php');
session_start();
?>

<?php
$sql;
if (isset($_POST['save'])) {
    $sql = "UPDATE patient SET Patient_Name=" . $_POST["Patient_Name"] . ",Gender=" . $_POST["Gender"] . ",DOB=" . $_POST["DOB"] . ",Contact_No=" . $_POST["Contact_No"].",Blood_Group=" . $_POST["Patient_Name"]  . ")
        WHERE Patient_ID= ". $_POST["Patient_ID"] . "";
    
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
                <h5 class="card-title">Update Patient Details</h5><br>

    <form method="post">
        
        <label id="first"> Enter your Patient ID:</label><br />
        <input type="text" name="Patient_ID"><br />
         <br>
        <label id="first"> First name:</label><br />
        <input type="text" name="Patient_Name"><br />
        <br>

        <label id="first">Address</label><br />
        <input type="text" name="Address"><br />
        <br>
        <label id="first">DOB</label><br />
        <input type="text" name="DOB"><br />
        <br>
        <label id="first">Contact_No</label><br/>
        <input type="text" name="Contact_No"><br/><br>        
        <br>
        <label id="first">Blood_Group</label><br/>
        <input type="text" name="Blood_Group"><br/><br>        
        <br>
        <button type="submit" name="save" class="btn btn-outline-success">Save</button>
    </form>

</body>

</html>