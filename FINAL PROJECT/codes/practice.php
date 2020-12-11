<?php
  $con = mysqli_connect("localhost","root","","project");
  
  $wantstart=12;
  $wantend=13;
  $seat_num=2;
  $id=8888;
  $pwd=8888;
  $building="N13-1";
  
  $seat_code=mysqli_query($con, "SELECT Seat_code FROM SEAT WHERE Seat_num=$seat_num AND Building=$building");
  $student_code=mysqli_query($con, "SELECT Student_code FROM REGISTERED_STUDENT WHERE ID=$id AND Password=$pwd");
  while($row = mysqli_fetch_array($seat_code)){
    $seatcode = $row['seat_code'];
    while($roww = mysqli_fetch_array($student_code)){
      $studentcode = $roww['student_code'];
      $query="INSERT INTO RESERVATION_HISTORY(Start, End, Student_code seat_code) VALUES('$wantstart', '$wantend', '$studentcode', 'seatcode')";
      $result = mysqli_query($con, $query);
      }
    }
  
  echo $wantstart;
  echo $wantend;
  echo $seat_num;
?>