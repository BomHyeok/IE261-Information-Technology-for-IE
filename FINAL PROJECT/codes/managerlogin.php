<?php
$con = mysqli_connect("localhost","root","","project");

$mid=$_POST['mid'];
$mpw=$_POST['mpassword'];

$result1 = mysqli_query($con, "SELECT Manager_ID, Manager_Password FROM MANAGER WHERE Manager_ID='$mid' and Manager_Password='$mpw'");
/*�Է��� ID�� PW�� ��ġ�ϴ� ȸ�������� �ִ��� Ȯ��*/
while($row = mysqli_fetch_array($result1)){
    $checkid = $row['Manager_ID'];
    $checkpw = $row['Manager_Password'];
}
/*������ �������� �Ѿ �� ����*/
if (mysqli_num_rows($result1)==1){
  $result2 = mysqli_query($con, "SELECT Manager_Name FROM MANAGER WHERE Manager_ID='$mid' and Manager_Password='$mpw'");
  while($row = mysqli_fetch_array($result2)){
    $mname = $row['Manager_Name'];
  }
  echo "<html><head><title>MAIN</title></head>

<body>
<Table bgcolor='lightgreen' align='center' width='600' height='100'><tr><td><div align='center'><FONT Size='6'>Hello ".$mname.", <br>You have been successfully Logged In!</FONT></div></td></tr></Table>
<br>
<form method=post action='managerinput.htm'><input type='hidden' value=$mid name='mid'><input type='hidden' value=$mname name='mname'>
<input type='hidden' value=$mid name='mid'><input type='hidden' value=$mpw name='mpassword'>
<div align='center'><input type='submit' value='Report Personalization'></form>
<a href='manager.htm'><button type='button'>Logout</button></a></div>



</body></html>";
}
/*Ʋ���� �ٽ� �α��� �ؾ���*/
else{
  echo "<html><head><title>Fail</title></head>

<body>
<Table bgcolor='lightgreen' align='center' width='600' height='100'><tr><td><div align='center'><FONT Size='7'>You Failed to Login!</FONT></div></td></tr></Table>
<br>
<div align='center'><a href='manager.htm'><button type='button'>Back</button></a></div>

</body></html>";

}

?>