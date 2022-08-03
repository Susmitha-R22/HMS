<?php
include('db.php');
session_start();
?>

<?php
$sql;
if (isset($_POST['save'])) {
    $patient=$_POST['Patient_ID'];
    
    $sql = "DELETE FROM patient WHERE Patient_ID= '$patient'";
    $query = mysqli_query($conn, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Patient Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<form method="post">
        <label id="first"> Which record needs to be deleted ?</label><br />
        <input type="text" name="Patient_ID"><br/>
        <br><br>
        <button type="submit" name="save" class="btn btn-outline-success">Save</button>
    </form>

</body>

</html>