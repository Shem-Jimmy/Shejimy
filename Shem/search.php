<html>
    <table border="1">
<tr>
    <td>hr_id</td>
    <td>first_name</td>
    <td>last_name</td>
    <td>location</td>
</tr>
  
<?php
$conn=mysqli_connect('localhost','root','');
$sdb=mysqli_select_db($conn,'hospital');
if(isset($_POST['sub']))
{
    $a=$_POST['id'];

$select="SELECT * from hr where hr_id='$a'";
$sql=mysqli_query($conn,$select);
if(mysqli_num_rows($sql)>0){
    while($data=mysqli_fetch_array($sql)){
   $id=$data['hr_id'];
   $first_name=$data['first_name'];
   $last_name=$data['last_name'];
   $location=$data['location']; 

   echo '<tr>';
   echo "<td> $id </td>";
   echo "<td>$first_name</td>";
   echo "<td>$last_name</td>";
   echo "<td>$location</td>";
  
    }
}
} 
echo '<a href"simple website.html">exist</a>';
?>
  </table>
</html>
