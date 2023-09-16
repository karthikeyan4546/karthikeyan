<?php
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$con=mysqli_connect("localhost","root","","pass") or ("db not connected");
$que="select * from ss where name='$name'";
$res=mysqli_query($con,$que);
if($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
    if($row['pwd']==$pwd)
    {
        $_SESSION['username']=$row['name'];
        $_SESSION['password']=$row['pwd'];
        echo"<script>alert('login successfull');
        window.location.href='home.php';</script>";

    }
    else
    {
        echo"<script>alert('login unsuccessfull');<script>";

    }
}

?>