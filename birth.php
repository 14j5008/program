<?php
  $data = [];
  $data["name"] = "太郎";
  $data["age"] = 20;
  $data["birth"] = [];
  $data["birth"]["plath"] = "新潟";
  $data["birth"]["day"] = "1987-01-03";
  
  echo json_encode($data)
  ?>
