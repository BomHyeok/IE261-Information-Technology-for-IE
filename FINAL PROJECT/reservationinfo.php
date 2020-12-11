<?php
$con = mysqli_connect("localhost","root","","project");

$start=$_POST['start'];
$end=$_POST['end'];
$id=$_POST['id'];
$name=$_POST['name'];
$building=$_POST['building'];
$seat_num=$_POST['seat'];

$query1 = "SELECT Student_Code FROM REGISTERED_STUDENT WHERE ID='$id'";
$query2 = "SELECT Seat_Code FROM SEAT WHERE Seat_Num='$seat_num' AND Building='$building'";
$result1 = mysqli_query($con, $query1);
$result2 = mysqli_query($con, $query2);
while($row = mysqli_fetch_array($result1)){
  $student_code=$row['Student_Code'];}
while($row = mysqli_fetch_array($result2)){
  $seat_code=$row['Seat_Code'];}

$query = "INSERT RESERVATION_HISTORY(Start,End,Student_Code,Seat_Code) VALUES ('$start','$end',$student_code,$seat_code)";
$final = mysqli_query($con, $query);

echo "<html><head></head><body>";
echo "Successfully reserved<br>";
  
    if($building=="N13-1"){
      echo "You've reserved seat $seat_num in N13-1.<p><table>";
      $arr=array(array(1,0,7,8,0,11,12),array(2,0,9,10,0,13,14),array(3),array(4,0,15,16,0,21,22,0,27,28,0,33,34,0,39,40,0,45,46),array(5,0,17,18,0,23,24,0,29,30,0,35,36,0,41,42,0,47,48),array(6,0,19,20,0,25,26,0,31,32,0,37,38,0,43,44,0,49,50));
    }
    else if($building=="N10"){
      echo "You've reserved seat $seat_num in N10.<p><table><tr align='center'><td bgcolor='#FF8C00' width='80' height='80'>Print Room</td></tr><tr><td height='40'></td></tr>";
      $arr=array(array(1,2,0,9,10,0,17,18,0,25,26,0,33,34,0,41,42,0,49,50,0,57),array(3,4,0,11,12,0,19,20,0,27,28,0,35,36,0,43,44,0,51,52,0,58),array(0),array(5,6,0,13,14,0,21,22,0,29,30,0,37,38,0,45,46,0,53,54,0,59),array(7,8,0,15,16,0,23,24,0,31,32,0,39,40,0,47,48,0,55,56,0,60));
    }
      $i=0;
      while($i<count($arr)){
        $j=0;
        echo "<tr align='center'>";
        while($j<count($arr[$i])){
          if($arr[$i][$j]!=0){
            $temp = $arr[$i][$j];
            if($arr[$i][$j]==$seat_num){
              echo "<td bgcolor='#82E0AA' width='80' height='80'>".$temp."</td>";
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
      
echo "</table></form></body></html>";

echo "<div align='center'><form method=POST action='reserve.htm'>
<input type='hidden' value=$id name='id'><input type='hidden' value=$name name='name'><input type='submit' value='Home'>";
?>