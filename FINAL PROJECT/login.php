<?php
$con = mysqli_connect("localhost","root","","project");

$id=$_POST['id'];
$pw=$_POST['password'];

$result1 = mysqli_query($con, "SELECT ID, Password FROM REGISTERED_STUDENT WHERE ID='$id' and Password='$pw'");
/*�Է��� ID�� PW�� ��ġ�ϴ� ȸ�������� �ִ��� Ȯ��*/
while($row = mysqli_fetch_array($result1)){
    $checkid = $row['ID'];
    $checkpw = $row['Password'];
}
/*������ �������� �Ѿ �� ����*/
if (mysqli_num_rows($result1)==1){
  $result2 = mysqli_query($con, "SELECT Name FROM STUDENT, REGISTERED_STUDENT WHERE STUDENT.Student_ID=REGISTERED_STUDENT.Student_ID and REGISTERED_STUDENT.ID='$id'");
  while($row = mysqli_fetch_array($result2)){
    $yourname = $row['Name'];
  }
  echo "<html><head><title>HOME</title></head>

<body>
<Table bgcolor='lightgreen' align='center' width='600' height='100'>
<tr><td><div align='center'><Font size='5'>Hello!<br>You have been successfully Logged In!</Font></div></td></tr></Table></div><br>
<form method=post action='reserve.htm'><input type='hidden' value=$id name='id'><input type='hidden' value=$yourname name='name'>

<div align='center'><input type='submit' value='Move on to the next page'></div>


</form>

</body></html>";
}
/*Ʋ���� �ٽ� �α��� �ؾ���*/
else{
  echo "<html><head><title>HOME</title></head>";
  

  echo "
<body><Table bgcolor='lightgreen' align='center' width='600' height='100'>
<tr><td><div align='center'><Font size='6'>You Failed to Login!</Font></div></td></tr></Table></div><br>
<div align='center'><a href='main.htm'><button type='button'>HOME</button></a></div>

</body></html>";

}

?>