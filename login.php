<?php
include('db.php');
session_start();
?>

<?php
if(isset($_POST['Submit']))
{
    $username=$_POST['User_Name'];
    $password=$_POST['Password'];
    
    $sql="select * from login";
    $query=mysqli_query($conn,$sql);
    
    $row=mysqli_fetch_array($query);
    {
        
        if($row["User_Name"]==$username && $row["Password"]==$password)
        {
            // echo "<script> locatio.href='admin_navbar.php'</script>";
            header('Location: admin_navbar.php');
        }
        else
        {
            echo "<script>alert('Error')</script>";
        }
    }
    
}

?> 
<html>
    <head>
    <title>
        Login</title></head>
    <style>
    .sec{
    position:relative;
    padding-top:300px;
    padding-bottom: 300px;
    padding-left: 100px;
   padding-right: 100px;     
        }</style>
    <body>
    <form action="" method="post">
        <div class="sec">
        <h1><b>Login</b></h1>
            Username:
            <input type="text" name="User_Name"><br><br>
            Password:
            <input type="Password" name="Password"><br><br>
    

            <button type="submit" name="Submit">login</button>

            
            <!-- <button><a href="admin_navbar.php">Signup now</a></button> -->
          </div></form>
          </body>
</html>