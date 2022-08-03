<?php
include('db.php');
session_start();
?>

<?php
$sql;
if (isset($_POST['save'])) {
    $sql = "INSERT INTO doctor (Doctor_ID,Doctor_Name,Contact_No,Specialisation,Hospital_ID)
        VALUES('" . $_POST["Doctor_ID"] . "','" . $_POST["Doctor_Name"] . "','" . $_POST["Contact_No"] . "','" . $_POST["Specialisation"] . "','" . $_POST["Hospital_ID"] . "')";
    
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
</head>

<body>
    <form method="post">
        <label id="first"> ID:</label><br />
        <input type="textarea" name="Doctor_ID"><br />

        <label id="first"> First name:</label><br />
        <input type="text" name="Doctor_Name"><br />


        <label id="first">Contact No</label><br />
        <input type="text" name="Contact_No"><br />

        <label id="first">Specialisation</label><br />
        <input type="text" name="Specialisation"><br />

        <label id="first">Hospital ID</label><br />
        <input type="text" name="Hospital ID"><br />


        <button type="submit" name="save">Save</button>
    </form>

</body>

</html>