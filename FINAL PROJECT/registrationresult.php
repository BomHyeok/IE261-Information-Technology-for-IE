<?php

$con = mysqli_connect("localhost","root", "","project");

$sid = $_POST['s_id'];
$sname = $_POST['s_name'];
$id = $_POST['id'];
$pw = $_POST['password'];

$check1 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM STUDENT WHERE Student_ID=$sid"));
$check2 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM REGISTERED_STUDENT WHERE ID='$id'"));
$check3 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM REGISTERED_STUDENT WHERE Student_ID='$sid'"));
$result1 = mysqli_query($con, "SELECT * FROM STUDENT WHERE Student_ID=$sid");


while($row = mysqli_fetch_array($result1)){
    $checkname = $row['Name'];
    $checkmajor = $row['Major'];
}

/*�й��� �������� ������ ��� �Ұ�*/
if($check1==0){
  echo "<Table bgcolor='lightgreen' align='center' width='600' height='100'>
<tr><td><div align='center'><Font size='5'>Warning : You can't register<br>Warning : You are not KAIST student</Font></div></td></tr></Table></div><br>";
  echo "<div align='center'><a href='main.htm'><button type='button'>Home</button></a></div>";
}
/*�Է��� ID�� �̹� ������ ��� �Ұ�*/
else if($check2==1){
  echo "<Table bgcolor='lightgreen' align='center' width='600' height='100'>
<tr><td><div align='center'><Font size='5'>Warning : You can't use ".$id." as your ID<br>Warning : Already exist</Font></div></td></tr></Table></div><br>";

  echo "<div align='center'><a href='main.htm'><button type='button'>Home</button></a></div>";
}
/*�й��̶� �̸��̶� ��ġ�ϴ��� Ȯ��*/
else if($checkname!=$sname){
  
  echo "<Table bgcolor='lightgreen' align='center' width='600' height='100'>
<tr><td><div align='center'><Font size='5'>Your information is wrong<br></Font></div></td></tr></Table></div><br>";

  echo "<div align='center'><a href='main.htm'><button type='button'>Home</button></a></div>";
}
else if($check3>0){
  echo "<Table bgcolor='lightgreen' align='center' width='600' height='100'>
<tr><td><div align='center'><Font size='5'>You already registered<br></Font></div></td></tr></Table></div><br>";

  echo "<div align='center'><a href='main.htm'><button type='button'>Home</button></a></div>";

}
/*��ġ�ϸ� ��� ����*/
else{
  $query = "INSERT INTO REGISTERED_STUDENT(ID,Password,Student_ID) values('$id','$pw',$sid)";
  $result = mysqli_query($con, $query);
  echo "<Table bgcolor='lightgreen' align='center' width='600' height='100'>
<tr><td><div align='center'><Font size='5'>You have been successfully registered<br></Font></div></td></tr></Table></div><br>";

  echo "<div align='center'><a href='main.htm'><button type='button'>Home</button></a></div>";
}

?>