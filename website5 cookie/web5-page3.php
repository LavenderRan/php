



<?php 
  $users = ["name" => "Henry","email" => "Henry@gmail.com","age"=>40];
  $users = serialize($users);

  setcookie('users',$users,time()+86400);
  $users = unserialize($_COOKIE['users']);
  print_r($users);

  


 ?>