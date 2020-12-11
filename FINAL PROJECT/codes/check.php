<?php
  $con = mysqli_connect("localhost","root","","project");
  $start=$_POST["start"];
  $end=$_POST["end"];
  $id=$_POST["id"];
  $name=$_POST['name'];
  $building = $_POST['building'];
  
/*현재시간체크*/
date_default_timezone_set("Asia/Seoul"); // 서울으로 시간 맞추기
$tempnow = date('m-d H:i'); // 월-일-시간-분 출력
for($i=0; $i<4 ; $i++){
  $nowarr[$i]=substr($tempnow, 3*$i, 2);
}
$now = implode( $nowarr ); // $now : 현재시간 ex) 06031220 : 6월 3일 12시 20분

/*현재시간체크끝*/

$temp = ((substr($end,0,2)-substr($start,0,2))*744+(substr($end, 2, 2)-substr($start,2,2))*24+substr($end, 4, 4)-substr($start, 4, 4));
(int)$temp;

$querysame = "SELECT Student_Code FROM REGISTERED_STUDENT WHERE ID='$id'";
$resultsame = mysqli_query($con, $querysame);
while($row = mysqli_fetch_array($resultsame)){
  $student_code=$row['Student_Code'];}
  
$same = mysqli_query($con,"SELECT * FROM RESERVATION_HISTORY WHERE (((Start>=$start AND Start<=$end AND End>=$end) OR 
(Start<=$start AND End>=$start AND End<=$end) OR (Start<=$start AND End>=$end)) AND Student_Code=$student_code)");
$samecnt = mysqli_num_rows($same);

if(($end<$start)or($now>$start)){

echo "
      <Table bgcolor='lightgreen' align='center' width='600' height='100'>
      <tr><td><div align='center'><Font size='6'>You have to input right time.</Font></div></td></tr></Table></div><br>
      <p><table>";
echo "
<div align='center'><form method=POST action='reserve.htm'>
<input type='hidden' value=$id name='id'><input type='hidden' value=$name name='name'>
<br><input type=submit value='HOME'></form></div>";
}
else if($temp>300){
echo "
      <Table bgcolor='lightgreen' align='center' width='600' height='100'>
      <tr><td><div align='center'><Font size='6'>You can reserve only 3 hours.</Font></div></td></tr></Table></div><br>
      <p><table>";
echo "
<div align='center'><form method=POST action='reserve.htm'>
<input type='hidden' value=$id name='id'><input type='hidden' value=$name name='name'>
<br><input type=submit value='HOME'></form></div>";
}
else if($samecnt>0){
echo "
      <Table bgcolor='lightgreen' align='center' width='600' height='100'>
      <tr><td><div align='center'><Font size='6'>You can't reserve at that time.</Font></div></td></tr></Table></div><br>
      <p><table>";
echo "
<div align='center'><form method=POST action='reserve.htm'>
<input type='hidden' value=$id name='id'><input type='hidden' value=$name name='name'>
<br><input type=submit value='HOME'></form></div>";
  
  
  
}
else{
  
  if($building=="N13-1"){
  for ($i=0 ; $i<50 ; $i++){
    $check = mysqli_query($con,"SELECT * FROM RESERVATION_HISTORY WHERE Seat_Code=$i+1 AND 
    (((Start>$start AND Start<$end AND End>=$end) OR (Start<=$start AND End>$start AND End<$end) OR (Start<=$start AND End>=$end)) AND Blackhistory=0)");
    $result[$i] = mysqli_num_rows($check);
    }}
  if($building=="N10"){
    for ($i=0 ; $i<61 ; $i++){
    $check = mysqli_query($con,"SELECT * FROM RESERVATION_HISTORY WHERE Seat_Code=$i+51 AND 
    (((Start>$start AND Start<$end AND End>=$end) OR (Start<=$start AND End>$start AND End<$end) OR (Start<=$start AND End>=$end)) AND Blackhistory=0)");
    $result[$i] = mysqli_num_rows($check);
    }
  }

echo "<html><head></head><body><form method=POST action='reservationinfo.php'>";
echo "<input type='hidden' value=$id name='id'>
      <input type='hidden' value=$name name='name'>
      <input type='hidden' value=$building name='building'>
      <input type='hidden' value=$start name='start'>
      <input type='hidden' value=$end name='end'>";
  
    if($building=="N13-1"){
      echo "
      <Table bgcolor='lightgreen' align='center' width='600' height='100'>
      <tr><td><div align='center'><Font size='6'>N13-1 Seat : Yellow can be reserved.</Font></div></td></tr></Table></div><br>
      <p><table>";
      $arr=array(array(1,0,7,8,0,11,12),array(2,0,9,10,0,13,14),array(3),array(4,0,15,16,0,21,22,0,27,28,0,33,34,0,39,40,0,45,46),array(5,0,17,18,0,23,24,0,29,30,0,35,36,0,41,42,0,47,48),array(6,0,19,20,0,25,26,0,31,32,0,37,38,0,43,44,0,49,50));
    }
    else if($building=="N10"){
      echo "
      <Table bgcolor='lightgreen' align='center' width='600' height='100'>
      <tr><td><div align='center'><Font size='6'>N10 Seat : Yellow can be reserved.</Font></div></td></tr></Table></div><br>
      <p><table>
      <tr align='center'><td bgcolor='#FF8C00' width='80' height='80'>Print Room</td></tr><tr><td height='40'></td></tr>";
      $arr=array(array(1,2,0,9,10,0,17,18,0,25,26,0,33,34,0,41,42,0,49,50,0,57),array(3,4,0,11,12,0,19,20,0,27,28,0,35,36,0,43,44,0,51,52,0,58),array(0),array(5,6,0,13,14,0,21,22,0,29,30,0,37,38,0,45,46,0,53,54,0,59),array(7,8,0,15,16,0,23,24,0,31,32,0,39,40,0,47,48,0,55,56,0,60));
    }
      $i=0;
      while($i<count($arr)){
        $j=0;
        echo "<tr align='center'>";
        while($j<count($arr[$i])){
          if($arr[$i][$j]!=0){
            $temp=$arr[$i][$j];
            if($result[$arr[$i][$j]-1]==0){
              echo "<td bgcolor='#F9E79F' width='80' height='80'><input type='submit' value=$temp name='seat'></td>";
              }
            else{
              echo "<td bgcolor='#E5E7E9' width='80' height='80'>".$temp."</td>";
              }
            }
          else{
            echo "<td width='40' height='80'></td>";
            }
          $j=$j+1;
          }
        echo "</tr>";
        $i=$i+1;
      }
    
echo "</table></form>";

echo "
<div align='center'><form method=POST action='reserve.htm'>
<input type='hidden' value=$id name='id'><input type='hidden' value=$name name='name'>
<br><input type=submit value='HOME'></form></div>";

echo "</body></html>";}

?>