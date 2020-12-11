<?php
$con = mysqli_connect("localhost","root","","project");
$mid=$_POST['mid'];
$mpw=$_POST['mpassword'];
$building=$_POST['pbuilding'];
$seat=$_POST['pseat'];

/*현재시간체크*/
date_default_timezone_set("Asia/Seoul"); // 서울으로 시간 맞추기
$tempnow = date('m-d H:i'); // 월-일-시간-분 출력
for($i=0; $i<4 ; $i++){
  $nowarr[$i]=substr($tempnow, 3*$i, 2);
}
$now = implode( $nowarr ); // $now : 현재시간 ex) 06031220 : 6월 3일 12시 20분
/*현재시간체크끝*/

$result1 = mysqli_query($con, "SELECT Seat_Code FROM SEAT WHERE Building='$building' and Seat_Num=$seat");
while($row = mysqli_fetch_array($result1)){
  $seat_code=$row['Seat_Code'];}

$result2 = mysqli_query($con, "SELECT History_Code FROM RESERVATION_HISTORY WHERE RESERVATION_HISTORY.Start<='$now' and RESERVATION_HISTORY.End>='$now' AND RESERVATION_HISTORY.Seat_Code=$seat_code");
while($row = mysqli_fetch_array($result2)){
  $code=$row['History_Code'];}

if(mysqli_num_rows($result2)>0){
$result3 = mysqli_query($con, "UPDATE RESERVATION_HISTORY SET Blackhistory=1 WHERE History_Code=$code");
echo "
<Table bgcolor='lightgreen' align='center' width='600' height='100'>
<tr><td><div align='center'><Font size='6'>Added to Blacklist.</Font></div></td></tr></Table><br>";
}
else{
echo " <Table bgcolor='lightgreen' align='center' width='600' height='100'>
<tr><td><div align='center'><Font size='6'>There is no one now.</Font></div></td></tr></Table><br>";
}
echo "<div>";
echo "<div align='center'><form method=POST action='managerlogin.php'>
<input type='hidden' value=$mid name='mid'><input type='hidden' value=$mpw name='mpassword'><input type='submit' value='Home'></form></div>";


?>