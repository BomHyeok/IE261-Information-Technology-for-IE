<?php
$con = mysqli_connect("localhost","root","","project");

$id=$_POST['id'];
$name=$_POST['name'];
$hist_code=$_POST['history_code'];

$result1 = mysqli_query($con, "DELETE FROM RESERVATION_HISTORY WHERE History_Code=$hist_code");

echo "
<Table bgcolor='lightgreen' align='center' width='600' height='100'>
<tr><td><div align='center'><Font size='6'>Cancel the reservation</Font></div></td></tr></Table></div><br>
";
echo "<p><form method=POST action='reserve.htm'>
<input type='hidden' value=$id name='id'><input type='hidden' value=$name name='name'>
<div align='center'><input type='submit' value='HOME'></div>";

?>