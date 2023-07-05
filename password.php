<?php
$host="localhost";
$ID="root";
$password="";
$db="user";
$data=mysqli_connect($host,$ID,$password,$db);
if($data===false)
{
die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$ID=$_POST["ID"];
$password=$_POST["password"];
$sql="select * from login where ID='".$ID. "' AND password='".$password."' ";
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);
    if($row["ID"]=="admin")
    {
        header("location:adminhome.php");
    }
    elseif($row["ID"]=="customer1")
    {
        header("location:userhome.php");
    }
    elseif($row["ID"]=="customer2")
    {
        header("location:userhome.php");
    }
    else
    {
        echo "ID or Password incorrect";
    }
}
?>