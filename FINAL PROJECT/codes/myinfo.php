<?php
$con = mysqli_connect("localhost","root","","project");

$id=$_POST['id'];
$name=$_POST['name'];
$result1 = mysqli_query($con, "SELECT Password FROM REGISTERED_STUDENT WHERE ID='$id'");
while($row = mysqli_fetch_array($result1)){
    $pw = $row['Password'];
}
echo "
<Table bgcolor='lightgreen' align='center' width='600' height='100'>
<tr><td><div align='center'><Font size='6'>My info</Font></div></td></tr></Table></div><br>
";

/*현재시간체크*/
date_default_timezone_set("Asia/Seoul"); // 서울으로 시간 맞추기
$tempnow = date('m-d H:i'); // 월-일-시간-분 출력
for($i=0; $i<4 ; $i++){
  $nowarr[$i]=substr($tempnow, 3*$i, 2);
}
$now = implode( $nowarr ); // $now : 현재시간 ex) 06031220 : 6월 3일 12시 20분
/*현재시간체크끝*/

echo "
<table border align='center'>
<tr><td>name</td><td>".$name."</td></tr>
<tr><td>ID</td><td>".$id."</td></tr>
<tr><td>PW</td><td>".$pw."</td></tr></table>";


$query = "SELECT History_Code,Seat_Code,Start,End,Blackhistory FROM RESERVATION_HISTORY,REGISTERED_STUDENT WHERE (RESERVATION_HISTORY.Student_Code=REGISTERED_STUDENT.Student_Code) and (REGISTERED_STUDENT.ID='$id')";
$result2 = mysqli_query($con, $query);
echo "<p><table border align='center'>";
echo "<tr align='center' ><td width='100'>Building</td><td width='100'>Seatnum</td><td width='100'>Start time</td>
      <td width='100'>End time</td><td width='120'>Black?</td><td width='100'>Cancel</td></tr>";
while($row = mysqli_fetch_array($result2)){
  $seatcode = $row['Seat_Code'];
  $start = $row['Start'];
  $end = $row['End'];
  $black = $row['Blackhistory'];
  $history_code = $row['History_Code'];
  for ($i=0 ; $i<4 ; $i++){
    $startarr[$i] = substr($start, 2*$i, 2);
    $endarr[$i] = substr($end, 2*$i, 2);
  }
  
  $tempquery = "SELECT * FROM SEAT WHERE Seat_Code=$seatcode";
  $result3 = mysqli_query($con, $tempquery);
  while($row = mysqli_fetch_array($result3)){
    $building = $row['Building'];
    $seatnum = $row['Seat_Num'];
  }
  echo "<tr align='center' height='50'><td>".$building."</td><td>".$seatnum."</td><td>";
  for ($i=0 ; $i<4 ; $i++){
    if($i<3){echo $startarr[$i]."/";}
    else{echo $startarr[$i]."</td><td>";}
  }
  for ($i=0 ; $i<4 ; $i++){
    if($i<3){echo $endarr[$i]."/";}
    else{echo $endarr[$i]."</td>";}
  }
  
  /*black 판별하는 부분*/
  if($black==0){
    if($start<=$now and $now<=$end){
    echo "<td>Using now.</td>";
    }
    else if($start<$now and $end<$now){
    echo "<td>No.</td>";
    }
    else{
    echo "<td>Not yet.<br>You can cancel.</td>";
    }
  }
  else{
    echo "<td>Yes.</td>";
  }

  /*Cancel*/
  if($start>$now and $end>$now){
  echo "<td><form method=POST action='cancel.php'>
  <input type='hidden' value=$id name='id'><input type='hidden' value=$name name='name'>
  <input type='hidden' value=$history_code name='history_code'>
  <input type='submit' value='cancel'></form></td>";
  }
  else{echo "<td>You can not<br>cancel now.</td>";}
  echo "</tr>";
}
echo "</table>";
echo "<p><form method=POST action='reserve.htm'>
<input type='hidden' value=$id name='id'><input type='hidden' value=$name name='name'>
<div align='center'><input type='submit' value='HOME'></div>";
?>
