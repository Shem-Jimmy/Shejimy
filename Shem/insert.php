<?php
$conn=mysqli_connect('localhost','root','','hospital');
if($conn)
{
    echo 'database is selected <br>';
}
else
{
    echo 'database is not selected<br>';
}
if(isset($_POST['sub'])){   
    $a=$_POST['hr_id'];
    $b=$_POST['fname'];
    $c=$_POST['lname'];
    $d=$_POST['local'];
}
$query= "INSERT INTO hr(hr_id,first_name,last_name,location)VALUE
(' $a','$b','$c','$d')";
$sql=mysqli_query($conn,$query);
if($sql)
{
    echo 'data is inserted<br>';
}
else
{
    echo 'data is not inserted<br>';
}

?>