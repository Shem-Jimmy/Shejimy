<?php
$conn=mysqli_connect('localhost','root','');
$sdb=mysqli_select_db($conn,'hospital');
if(isset($_POST['sub'])){
$a=$_POST['hr_id'];
$b=$_POST['fname'];
$c=$_POST['lname'];
$d=$_POST['local'];
}
$change="UPDATE hr SET first_name='$b',last_name='$c',location='$d'
WHERE hr_id='$a'";
$excute=mysqli_query($conn,$change);
if($excute)
{
 echo 'data is updated';
}
else
{
    echo 'data is not updated';
}
?>

