<?php

$con = mysqli_connect("localhost","root","","shoutit");

if(mysqli_connect_errno()){
  echo 'Faild to connect to Mysql: '.mysqli_connect_errno();
}