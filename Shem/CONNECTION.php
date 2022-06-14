<?php
$con=mysqli_connect('localhost','root','','school');
if(!$con){
    echo'database not selected<br>';
}
else{
    echo'database selected<br>';
}
if(isset($_POST['sub'])){
    $a=$_POST['fname'];
    $b=$_POST['lname'];
    $c=$_POST['gender'];
    $d=$_POST['age'];
    $e=$_POST['address'];
}
$query="INSERT INTO student(id,first_name,last_name,gender,age,adress)VALUES
('','$a','$b','$c','$d','$e')";
$sql=mysqli_query($con,$query);
if(!$sql){
    echo'data not inserted<br>';
}
else{
    echo'data  inserted';
}

?>

