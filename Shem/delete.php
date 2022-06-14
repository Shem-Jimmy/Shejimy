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
    
}
$query= "DELETE FROM hr WHERE hr_id='$a'";
$sql=mysqli_query($conn,$query);
if($sql)
{
    echo 'data is deleted<br>';
}
else
{
    echo 'data is not deleted<br>';
}

?>