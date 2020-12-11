<?php
/*seat에 자동으로 값 넣는 코드*/
$con = mysqli_connect("localhost","root", "","project");

for($i=0 ; $i<50 ; $i++){
$query = "INSERT INTO SEAT(Seat_Code, Building, Seat_Num) VALUES ($i+1,'N13-1',$i+1)";
$result = mysqli_query($con, $query);
}
for($j=50; $j<110;$j++){
$query = "INSERT INTO SEAT(Seat_Code, Building, Seat_Num) VALUES ($j+1,'N10',$j-49)";
$result = mysqli_query($con, $query);
}
?>