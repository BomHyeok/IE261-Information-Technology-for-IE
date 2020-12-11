<?php
  $con = mysqli_connect("localhost","root","","project");
  $wantstart=$_POST["start"];
  $wantend=$_POST["end"];
  $id=$_POST["id"];
  $name=$_POST['name'];
  $building = $_POST['building'];
  echo $wantstart;
  echo $id;
  echo $building;
?>