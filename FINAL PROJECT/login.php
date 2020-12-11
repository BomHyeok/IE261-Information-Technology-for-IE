<?php
$con = mysqli_connect("localhost","root","","project");

$id=$_POST['id'];
$pw=$_POST['password'];

$result1 = mysqli_query($con, "SELECT ID, Password FROM REGISTERED_STUDENT WHERE ID='$id' and Password='$pw'");
/*입력한 ID와 PW가 일치하는 회원정보가 있는지 확인*/
while($row = mysqli_fetch_array($result1)){
    $checkid = $row['ID'];
    $checkpw = $row['Password'];
}
/*있으면 다음으로 넘어갈 수 있음*/
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
/*틀리면 다시 로그인 해야함*/
else{
  echo "<html><head><title>HOME</title></head>";
  

  echo "
<body><Table bgcolor='lightgreen' align='center' width='600' height='100'>
<tr><td><div align='center'><Font size='6'>You Failed to Login!</Font></div></td></tr></Table></div><br>
<div align='center'><a href='main.htm'><button type='button'>HOME</button></a></div>

</body></html>";

}

?>